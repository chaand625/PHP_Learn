<?php foreach ($jokes as $joke): ?>
    <blockquote>
        <p>
            <?= htmlspecialchars($joke, ENT_QUOTES, 'UTF-8') ?>
        </p>
    </blockquote>
<?php endforeach; ?>

<?php foreach ($jokeIds as $jokeId): ?>
    <blockquote>
        <p>
            <?= htmlspecialchars($jokeId, ENT_QUOTES, 'UTF-8') ?>
        </p>
    </blockquote>
<?php endforeach; ?>