
<?php

/*To reach runnable copy: visit my online notebook editor
https://phpsandbox.io/n/beige-cliegg-lars-0z2wx#app/Console/Commands/GenerateFibonacci.php
*/

/**
 * Why Iteration Over Recursion?
 *  1- Efficiency: Iterative solutions have a time complexity of O(n) and use constant space, while naive recursive solutions have exponential time O(2^n) complexity due to repeated calculations which may lead to crash or run for days in case use number above 100.
 *  2- Avoiding Stack Overflow: Recursion can lead to a stack overflow if the recursion depth is too large, which is not an issue with iteration.

 */
namespace App\Console\Commands;

use Illuminate\Console\Command;

class GenerateFibonacci extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'generate:fibonacci {length : The length of the Fibonacci sequence}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate a Fibonacci sequence of specified length';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $length = $this->argument('length');

        if (!is_numeric($length) || $length < 1) {
            $this->error('The length must be a positive integer.');
            return 1;
        }

        $sequence = $this->generateFibonacci($length);
        $this->info('Fibonacci sequence: ' . implode(', ', $sequence));

        return 0;
    }

    /**
     * Generate a Fibonacci sequence of the specified length.
     *
     * @param int $length
     * @return array
     */
    private function generateFibonacci(int $length): array
    {
        $sequence = [0, 1];

        for ($i = 2; $i < $length; $i++) {
            $sequence[] = $sequence[$i - 1] + $sequence[$i - 2];
        }

        return array_slice($sequence, 0, $length);
    }
}