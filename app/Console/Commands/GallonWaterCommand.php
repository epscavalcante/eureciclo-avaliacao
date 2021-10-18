<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class GallonWaterCommand extends Command
{
    private float $totalVolume;

    private int $numberOfBottles;

    private array $bottlesSelected = [];

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'eureciclo:gallon-water';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->totalVolume = (float) $this->ask('Insira o volume do galão');
        $this->numberOfBottles = (int) $this->ask('Quantidade de garrafas');

        $bottles = collect([]);

        for ($i = 1; $i <= $this->numberOfBottles; $i++) {
            $bottles->add((float) $this->ask("Volume da garrafa {$i}"));
        }

        $bottles = $bottles->sortDesc();

        $bottles->each(function ($bottle) {
            if ($bottle <= $this->getNeededVolumeToCompleteGallon() && !$this->isFull())
                $this->incrementVolumeGallon($bottle);
        });

        if (!$this->isFull())
            $bottles->sort()->first(function ($bottle) {
                if ($bottle >= $this->getNeededVolumeToCompleteGallon() && !$this->isFull())
                    $this->incrementVolumeGallon($bottle);
            });

        $this->info("Resposta: [{$this->getBottlesUsed()}], sobra: {$this->getLeftOver()}L");

        return Command::SUCCESS;
    }

    private function isFull(): bool
    {
        return $this->getCurrentVolumeGallon() >= $this->totalVolume;
    }

    private function getNeededVolumeToCompleteGallon(): float
    {
        return $this->totalVolume - $this->getCurrentVolumeGallon();
    }

    private function getCurrentVolumeGallon(): float
    {
        return array_sum($this->bottlesSelected);
    }

    public function getBottlesUsed(): string
    {
        return collect($this->bottlesSelected)->implode((', '));
    }

    private function incrementVolumeGallon($volume)
    {
        return array_push($this->bottlesSelected, $volume);
    }

    private function getLeftOver(): float
    {
        return $this->getCurrentVolumeGallon() - $this->totalVolume;
    }
}
