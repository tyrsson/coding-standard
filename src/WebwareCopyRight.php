<?php

declare(strict_types=1);

/**
 * This file is part of the Webware Coding Standard package.
 *
 * Copyright (c) 2026 Joey (aka Tyrsson) Smith <jsmith@webinertia.net>
 * and contributors.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Webware\CodingStandard;

use PhpCsFixer\RuleSet\RuleSetDefinitionInterface;

use function date;
use function explode;
use function sprintf;
use function str_contains;
use function str_replace;
use function ucwords;

final class WebwareCopyRight implements RuleSetDefinitionInterface
{
    public const SET_NAME = '@Webware/copyright-header';

    private string $year;

    private string $copyText = <<<'HEADER'
    This file is part of the %s package.

    Copyright (c) %s %s %s
    and contributors.

    For the full copyright and license information, please view the LICENSE
    file that was distributed with this source code.
    HEADER;

    public function __construct(
        // composer vendor/package name
        private string $packageName,
        private string $authorName,
        private string $authorEmail,
        private string $minYear = '2026',
        ?string $copyText = null,
    ) {
        if ($copyText !== null) {
            $this->copyText = $copyText;
        }

        $this->formatPackageName();
        $this->formatAuthorName();
        $this->formatYear();
        $this->formatEmail();
        $this->buildCopyrightHeader();
    }

    public function getDescription(): string
    {
        return 'This ruleset class can be used to create a Copyright header for packages.';
    }

    public function getName(): string
    {
        return self::SET_NAME;
    }

    public function isRisky(): bool
    {
        return false;
    }

    public function getRules(): array
    {
        return [
            'header_comment' => [
                'header'       => $this->copyText,
                'comment_type' => 'PHPDoc',
                'location'     => 'after_declare_strict',
                'separate'     => 'both',
            ],
        ];
    }

    private function formatPackageName(): void
    {
        if (str_contains($this->packageName, '/')) {
            $parts             = explode('/', $this->packageName);
            $vendor            = ucwords(str_replace(['-'], ' ', $parts[0]));
            $package           = ucwords(str_replace(['-'], ' ', $parts[1]));
            $this->packageName = $vendor . ' ' . $package;

            return;
        }
        $this->packageName = ucwords(str_replace(['-'], ' ', $this->packageName));
    }

    private function formatAuthorName(): void
    {
        $this->authorName = ucwords($this->authorName);
    }

    private function formatYear(): void
    {
        $currentYear = date('Y');
        if ($currentYear !== $this->minYear) {
            $this->year = $this->minYear . '-' . $currentYear;
        } else {
            $this->year = $this->minYear;
        }
    }

    private function formatEmail(): void
    {
        if (! str_contains($this->authorEmail, '<')) {
            $this->authorEmail = '<' . $this->authorEmail;
        }
        if (! str_contains($this->authorEmail, '>')) {
            $this->authorEmail .= '>';
        }
    }

    private function buildCopyrightHeader(): void
    {
        $this->copyText = sprintf(
            $this->copyText,
            $this->packageName,
            $this->year,
            $this->authorName,
            $this->authorEmail
        );
    }
}
