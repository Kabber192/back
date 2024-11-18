function multiples(int $m, float $n): array {
    return array_map(fn($i) => $i * $n, range(1, $m));
}