<?php

namespace Tests\Unit;

use Illuminate\Console\Command;
use Tests\TestCase;;

class GallonwaterCommandTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_gallon_watter_console_command_case_one()
    {
        $gallonVolume = 7;
        $bootlesVolume = [1, 3, 4.5, 1.5, 3.5];

        $command = $this->artisan('eureciclo:gallon-water')
            ->expectsQuestion('Insira o volume do galão', $gallonVolume)
            ->expectsQuestion('Quantidade de garrafas', count($bootlesVolume));

        foreach ($bootlesVolume as $key => $value) {
            $key++;

            $command->expectsQuestion("Volume da garrafa {$key}", $value);
        }

        $command->expectsOutput('Resposta: [4.5, 1.5, 1], sobra: 0L')
            ->assertExitCode(Command::SUCCESS);
    }

    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_gallon_watter_console_command_case_two()
    {
        $gallonVolume = 5;
        $bootlesVolume = [1, 3, 4.5, 1.5];

        $command = $this->artisan('eureciclo:gallon-water')
            ->expectsQuestion('Insira o volume do galão', $gallonVolume)
            ->expectsQuestion('Quantidade de garrafas', count($bootlesVolume));

        foreach ($bootlesVolume as $key => $value) {
            $key++;

            $command->expectsQuestion("Volume da garrafa {$key}", $value);
        }

        $command->expectsOutput('Resposta: [4.5, 1], sobra: 0.5L')
            ->assertExitCode(Command::SUCCESS);
    }

    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_gallon_watter_console_command_case_three()
    {
        $gallonVolume = 4.9;
        $bootlesVolume = [4.5, 0.4];

        $command = $this->artisan('eureciclo:gallon-water')
            ->expectsQuestion('Insira o volume do galão', $gallonVolume)
            ->expectsQuestion('Quantidade de garrafas', count($bootlesVolume));

        foreach ($bootlesVolume as $key => $value) {
            $key++;

            $command->expectsQuestion("Volume da garrafa {$key}", $value);
        }

        $command->expectsOutput('Resposta: [4.5, 0.4], sobra: 0L')
            ->assertExitCode(Command::SUCCESS);
    }
}
