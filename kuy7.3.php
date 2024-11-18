function square_digits(int $n): int {
    $squared = array_map(fn($digit) => $digit ** 2, str_split((string)$n));
    return (int)implode('', $squared);
}