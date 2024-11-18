function enough($cap, $on, $wait) {
    $space_left = $cap - $on;
    return max(0, $wait - $space_left);
}