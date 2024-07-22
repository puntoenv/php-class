<main>
  <pre style="display: none;">
        <? var_dump($data) ?>
    </pre>
  <section>
    <img src="<?= $poster_url ?>" alt="<?= $title ?>" width="200" style="border-radius: 16px" />
  </section>
  <hgroup>
    <h3>
      <?= $title ?> - <?= $until_message ?>
    </h3>
    <p>
      Release Date <?= $release_date ?>
    </p>
    <p>
      The next movie of the Marvel Cinematic Universe is <?= $following_production ?>
    </p>
  </hgroup>
</main>