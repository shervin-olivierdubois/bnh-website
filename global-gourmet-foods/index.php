<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Hills Foods Ltd. | Bring Nutrition Home</title>
        <?php print file_get_contents('../themes/bnh/templates/html--head--resources.html'); ?>
    </head>

    <body>
        <div class="page-wrapper">
            <?php print file_get_contents('../themes/bnh/templates/header.html'); ?>
            <?php print file_get_contents('../content/global-gourmet-foods--hero--content.html'); ?>
            <?php print file_get_contents('../content/global-gourmet-foods--main--content.html'); ?>
            <?php print file_get_contents('../content/global--main--contest.html'); ?>
            <?php print file_get_contents('../themes/bnh/templates/postscript--companies.html'); ?>
            <?php print file_get_contents('../themes/bnh/templates/postscript--funding.html'); ?>
            <?php print file_get_contents('../themes/bnh/templates/footer.html'); ?>
        </div>
        <?php print file_get_contents('../themes/bnh/templates/html--body--resources.html'); ?>
    </body>
</html>