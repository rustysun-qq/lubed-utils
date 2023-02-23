<?php
namespace Lubed\Utils\Terminal;

/**
 * color for terminal
 */
class TerminalColor
{
    // Reset all
    const RESET = "\e[0m";
    const NORMAL = "\e[0m";
    // Attributes
    const BOLD_BEGIN = "\e[1m";
    const BOLD_END = "\e[21m";
    const DIM_BEGIN = "\e[2m";
    const DIM_END = "\e[22m";
    const UNDERLINE_BEGIN = "\e[4m";
    const UNDERLINE_END = "\e[24m";
    const BLINK_BEGIN = "\e[5m";
    const BLINK_END = "\e[25m";
    const REVERSE_BEGIN = "\e[7m";
    const REVERSE_END = "\e[27m";
    const HIDDEN_BEGIN = "\e[8m";
    const HIDDEN_END = "\e[28m";
    // Foreground colors
    const DEFAULT = "\033[39m";
    const BLACK = "\033[0;30m";
    const WHITE = "\033[0;38m";
    const GRAY = "\033[0;90m";
    const DARK_GRAY = "\033[1;30m";
    const RED = "\033[0;31m";
    const LIGHT_RED = "\033[1;31m";
    const GREEN = "\033[0;32m";
    const LIGHT_GREEN = "\033[1;32m";
    const BROWN = "\033[0;33m";
    const YELLOW = "\033[0;33m";
    const BLUE = "\033[0;34m";
    const LIGHT_BLUE = "\033[1;34m";
    const MAGENTA = "\033[0;35m";
    const PURPLE = "\033[2;35m";
    const LIGHT_MAGENTA = "\033[1;35m";
    const LIGHT_PURPLE = "\033[1;35m";
    const CYAN = "\033[0;36m";
    const LIGHT_CYAN = "\033[1;36m";
    const LIGHT_GRAY = "\033[2;37m";
    const LIGHT_WHITE = "\033[1;38m";
    const LIGHT_RED_ALT = "\033[91m";
    const LIGHT_GREEN_ALT = "\033[92m";
    const LIGHT_YELLOW_ALT = "\033[93m";
    const LIGHT_YELLOW = "\033[1;93m";
    const LIGHT_BLUE_ALT = "\033[94m";
    const LIGHT_MAGENTA_ALT = "\033[95m";
    const LIGHT_CYAN_ALT = "\033[96m";
    const LIGHT_WHITE_ALT = "\033[97m";
    // Background colors
    const BG_BLACK = "\033[40m";
    const BG_WHITE = "\e[107m";
    const BG_RED = "\033[41m";
    const BG_GREEN = "\033[42m";
    const BG_YELLOW = "\033[43m";
    const BG_BLUE = "\033[44m";
    const BG_MAGENTA = "\033[45m";
    const BG_CYAN = "\033[46m";
    const BG_LIGHT_GRAY = "\033[47m";
    const BG_DEFAULT = "\033[49m";
    const BG_DARK_GRAY = "\e[100m";
    const BG_LIGHT_RED = "\e[101m";
    const BG_LIGHT_GREEN = "\e[102m";
    const BG_LIGHT_YELLOW = "\e[103m";
    const BG_LIGHT_BLUE = "\e[104m";
    const BG_LIGHT_MAGENTA = "\e[105m";
    const BG_LIGHT_CYAN = "\e[106m";
}