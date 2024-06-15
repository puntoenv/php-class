<?php

declare(strict_types=1); // <- file level and at the top of it

function render_template(string $template, array $data = []): void
{
  // ?? how do we pass data to the template
  extract($data);
  require "templates/$template.php";
}
function get_data(string $url): array
{
  $result = file_get_contents($url); // if you only need to make a GET request from an API
  $data = json_decode($result, true);
  return $data;
}

function get_until_message(int $days): string
{
  return match (true) {
    $days === 0 => 'today is the release date',
    $days === 1 => 'tomorrow is the release date',
    $days < 7   => 'this week is the release date',
    $days < 30  => 'this month is the release date',
    default     => "$days days until the release date",
  };
}
