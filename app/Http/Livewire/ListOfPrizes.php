<?php

    namespace App\Http\Livewire;

    use App\Models\MoneyPrize;
    use App\Models\PhysicalPrize;
    use App\Models\PhysicalPrizeItem;
    use App\Models\PointsPrize;
    use App\Models\UserPrize;
    use Illuminate\Support\Facades\Auth;
    use Livewire\Component;

    class ListOfPrizes extends Component
    {
        public function render()
        {
            $prizes = UserPrize::orderBy('created_at', 'DESC')->get();
            return view('livewire.list-of-prizes', compact('prizes'));
        }

        public function generate()
        {
            $prizeTypes = [
                'physical',
                'money',
                'points',
            ];


            $generatedItem = $prizeTypes[rand(0, 2)];

            switch ($generatedItem) {
                default:
                case 'physical':
                    $availablePrizes = PhysicalPrizeItem::where('status', PhysicalPrizeItem::STATUS_AVAILABLE)->pluck('id');
                    $prizeId = $availablePrizes[rand(0, count($availablePrizes) - 1)];
                    $prize = PhysicalPrize::create([
                        'item_id' => $prizeId,
                        'status' => PhysicalPrize::STATUS_OPEN
                    ]);
                    PhysicalPrizeItem::where('id', $prizeId)->update(['status' => PhysicalPrizeItem::STATUS_UNAVAILABLE]);
                    break;
                case 'money':
                    $moneyLimit = MoneyPrize::where('status', '<>', MoneyPrize::STATUS_CONVERTED)->sum('value');
                    $moneyLimit = !$moneyLimit ? config('game.prizes.money_limit') : $moneyLimit;
                    $prize = MoneyPrize::create([
                        'value' => rand(1, $moneyLimit),
                        'status' => MoneyPrize::STATUS_OPEN
                    ]);
                    break;
                case 'points':
                    $prize = PointsPrize::create([
                        'value' => rand(config('game.prizes.points_min'), config('game.prizes.points_max')),
                    ]);
                    break;
            }

            UserPrize::create([
                'prize_id' => $prize->id,
                'user_id' => Auth::user()->id,
                'type' => $generatedItem
            ]);
        }
    }
