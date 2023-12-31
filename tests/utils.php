<?php declare(strict_types=1);

function success(string $message): void
{
    echo "\033[32m✓ $message\033[0m" . PHP_EOL;
}

/**
 * @return never-return
 */
#[NoReturn] function error(string $message): void
{
    echo "\033[31m⨯ $message\033[0m" . PHP_EOL;
    exit(1);
}

/**
 * @param string[] $messages
 * @return never-return
 */
#[NoReturn] function errors(array $messages): void
{
    foreach ($messages as $message) {
        echo "\033[31m⨯ $message\033[0m" . PHP_EOL;
    }
    exit(1);
}
