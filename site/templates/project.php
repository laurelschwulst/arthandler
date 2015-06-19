<?php snippet('header-article') ?>

  <main class="main article" role="main">

    <h1><?php echo $page->title()->html() ?></h1>

    <div class="article-container">

      <div class="text-block">
        <div class="article-metadata">
          <div class="issue">From Issue No. <?php echo $page->issue() ?></div>
          <div class="date"><?php echo $page->date("F j, Y") ?></div>
          <div class="author">By <?php echo $page->author() ?></div>
        </div>
      </div>

    <?php echo $page->text()->kirbytext() ?>

    <div class="outro">
      <?php echo $page->outro()->kirbytext() ?>
    </div>

    </div>

  </main>

  <div class="sp-scrollbar">
    <div class="sp-thumb"/>
  </div>

  <div class="clearer"></div>

  <div class="article-footer">
    <div id="back-to-top" href="#top">Back to Top</div>
  </div>

<?php snippet('footer') ?>