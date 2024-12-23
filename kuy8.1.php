function removeEveryOther(array $arr): array {
    return array_filter($arr, function($value, $key) {
        return $key % 2 === 0;
    }, ARRAY_FILTER_USE_BOTH);
}