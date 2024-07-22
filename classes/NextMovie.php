<?php

declare(strict_types=1);

class NextMovie
{
  public function __construct(
    private int $days_until,
    private string $title,
    private string $following_production,
    private string $release_date,
    private string $poster_url,
    private string $overview
  ) {}

  public function get_until_message(): string
  {
    $days = $this->days_until;
    return match (true) {
      $days === 0 => "today is the release date",
      $days === 1 => "tomorrow is the release date",
      $days < 7   => "this week is the release date",
      $days < 30  => "this month is the release date",
      default     => "$days days until the release date",
    };
  }

  public static function fetch_and_create_movie(string $api_url): NextMovie
  {
    $result = file_get_contents($api_url);
    $data = json_decode($result, true);

    return new self(
      $data["days_until"],
      $data["title"],
      $data["following_production"]["title"] ?? "Unknown",
      $data["release_date"],
      $data["poster_url"],
      $data["overview"],
    );
  }

  public function get_data()
  {
    return get_object_vars($this);
  }
}
