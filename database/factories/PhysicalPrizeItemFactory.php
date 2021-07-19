<?php

    namespace Database\Factories;

    use App\Models\PhysicalPrizeItem;
    use Illuminate\Database\Eloquent\Factories\Factory;

    class PhysicalPrizeItemFactory extends Factory
    {
        /**
         * The name of the factory's corresponding model.
         *
         * @var string
         */
        protected $model = PhysicalPrizeItem::class;

        /**
         * Define the model's default state.
         *
         * @return array
         */
        public function definition()
        {
            return [
                'title' => $this->faker->word(),
                'status' => PhysicalPrizeItem::STATUS_AVAILABLE
            ];
        }
    }
