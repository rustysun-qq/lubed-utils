<?php
namespace Lube\Utils\Terminal;

/**
 * style for terminal
 */
class TerminalStyle
{
    private $background;
    private $color;
    private $options;

    /**
     * @param string $background
     * @param string $color
     * @param array $options
     */
    public function __construct(
        string $background,
        string $color,
        array $options = [
            'isBold' => false,
            'isUnderlined' => false,
            'isDim' => false,
        ]
    ) {
        $this->background = $background;
        $this->color = $color;
        $this->options = $options;
    }

    /**
     * @return string
     */
    public function getBackground() : string
    {
        return $this->background;
    }

    /**
     * @return string
     */
    public function getColor() : string
    {
        return $this->color;
    }

    /**
     * @return bool
     */
    public function getOptions() : array
    {
        return $this->options;
    }
}