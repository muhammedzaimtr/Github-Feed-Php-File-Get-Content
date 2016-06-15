
<style type="text/css">
    *{
        margin: 0;
        padding: 0;
        font-family: Arial;
        font-size: 100%;
    }
    .repo-list-stats,.repo-list-info,.repo-list-description,.participation-graph{
        display: none;
    }
    h3 , p{
        display: inline-block;
        color: #535353;
    }
    h3 a{
        color: #535353;
        text-decoration: none;
        font-size: 20px;
    }
    .listele{
        width: 50%;
        margin: 0 auto;
        display: block;
    }
    @media screen and (max-width: 768px){
        .listele{
            width: 90%;
            margin: 0 auto;
            display: block;
        }
    }
    .public{
        padding: 10px;
        border-bottom: 1px solid #ddd;
    }
</style>
<?php
$veri = file_get_contents("https://github.com/muhammedzaimtr?tab=repositories");

preg_match('@<ul class="repo-list js-repo-list" data-filterable-for="your-repos-filter" data-filterable-type="substring">(.*?)</ul>@si',$veri,$baslik);
?>
<div class="listele">
    <?php print $baslik[0]; ?>
</div>

