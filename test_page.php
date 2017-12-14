<?php 
     /*
    Template Name: Test page
    */
    get_header(); ?>

    <main role="main">
<!-- //test// -->

<section class="test-page wrapper margin-bottom">
    <h1 class="test-page_title">Пройти тест</h1>
    <form id="quizForm" class="test-page_form">
        <h3 id="questionTitle" class="test-page_form-title">
            <?php echo LangDicts::$dict['discover_your_level']; ?>
        </h3>
        <p id="questionDefinition" class="test-page_form_question-title"></p>
        <p id="questionText" class="test-page_form-question"></p>
        <p id="questionOptions" class="test-page_form-description">
            <?php echo LangDicts::$dict['test_page_text']; ?>
        </p>

        <div id="questionButton">
            <input id="buttonStart" class="test-page_form-button" name="buttonStart"
                   onclick="return buttonStart_onclick()" type="button" value="<?php echo LangDicts::$dict['test_page_start']; ?>"/>
        </div>

    </form>

</section>

<!-- //end of test// -->
	</main>
	<?php get_footer(); ?>
    <script>
        var question = '<?php echo LangDicts::$dict['test_question']; ?>',
            next_question = '<?php echo LangDicts::$dict['test_next_question']; ?>',
            results = '<?php echo LangDicts::$dict['test_results']; ?>',
            results_txt1 = '<?php echo LangDicts::$dict['test_results_txt1']; ?>',
            results_txt2 = '<?php echo LangDicts::$dict['test_results_txt2']; ?>',
            answer = '<?php echo LangDicts::$dict['test_answer']; ?>',
            level = '<?php echo LangDicts::$dict['test_level']; ?>',
            lvl1 = '<?php echo LangDicts::$dict['level1']; ?>',
            lvl2 = '<?php echo LangDicts::$dict['level2']; ?>',
            lvl3 = '<?php echo LangDicts::$dict['level3']; ?>',
            lvl4 = '<?php echo LangDicts::$dict['level4']; ?>',
            lvl5 = '<?php echo LangDicts::$dict['level5']; ?>',
            rslt1 = '<?php echo LangDicts::$dict['result1']; ?>',
            rslt2 = '<?php echo LangDicts::$dict['result2']; ?>',
            rslt3 = '<?php echo LangDicts::$dict['result3']; ?>',
            results_txt3 = '<?php echo LangDicts::$dict['test_results_txt3']; ?>';
    </script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/test.js"></script>
