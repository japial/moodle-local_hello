<?php
require(__DIR__ . '/../../config.php');

$PAGE->set_url(new moodle_url('/local/hello/index.php'));

$PAGE->set_context(context_system::instance());

$PAGE->set_title(get_string('pluginname', 'local_hello'));

$PAGE->set_pagelayout('standard');

$user_name = optional_param('username', 'World', PARAM_ALPHANUM);

$courses_page = new moodle_url('/course');

$nextitemurl = new moodle_url($PAGE->url, ['item' => 231]);

$PAGE->set_heading(  get_string('hello', 'local_hello') .' page heading');
echo $OUTPUT->header();
?>
<div class="row">
    <div class="col-md-6 mx-auto py-2">
        <h1><?= get_string('hello', 'local_hello') ?>, <?= $user_name ? s($user_name): get_string('default')  ?>!</h1>

        <form action="<?= $PAGE->url ?>" method="get">
            <input type="text" class="form-control" name="username">
            <button class="btn btn-success mt-3" type="submit"><?= get_string('submit')?></button>
        </form>
        <hr>
        <?= $nextitemurl ?>
    </div>
</div>

<?php echo $OUTPUT->footer(); ?>