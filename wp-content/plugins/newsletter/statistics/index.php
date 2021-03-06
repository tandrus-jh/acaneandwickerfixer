<?php
require_once NEWSLETTER_INCLUDES_DIR . '/controls.php';
$module = NewsletterStatistics::instance();
$controls = new NewsletterControls();
$emails = Newsletter::instance()->get_emails();

if (!$controls->is_action()) {
    $controls->data = $module->options;
}

if ($controls->is_action('save')) {
    $module->save_options($controls->data);
    $controls->messages = 'Saved.';
}
?>

<div class="wrap" id="tnp-wrap">

    <?php $help_url = 'http://www.thenewsletterplugin.com/plugins/newsletter/statistics-module'; ?>

    <?php include NEWSLETTER_DIR . '/tnp-header.php'; ?>

	<div id="tnp-heading">
    
        <h2><?php _e('Configuration and Email List', 'newsletter') ?></h2>

        <p>
            This module is a core part of Newsletter that collects statistics about sent emails: how many have
            been read, how many have been clicked and so on.
        </p>
        <p>
            To see the statistics of each single email, you should click the "statistics" button
            you will find near each message where they are listed (like on Newsletters panel). For your
            convenience, below there is a list of each email sent by Newsletter till now.
        </p>
        <p>
            <strong>Advanced reports for each email can be generated installing the
            <a href="http://www.thenewsletterplugin.com/plugins/newsletter/reports-module?utm_source=plugin&utm_medium=link&utm_campaign=newsletter-report&utm_content=<?php echo NEWSLETTER_VERSION?>" target="_blank">Reports Extension</a></strong>.
        </p>
    </div>
    
    <div id="tnp-body">
    
    <form method="post" action="">
        <?php $controls->init(); ?>
    <table class="form-table">
        <tr>
            <th><?php _e('Secret key', 'newsletter') ?></th>
            <td>
                <?php $controls->text('key') ?>
                <p class="description">
                    <?php _e('This auto-generated key is used to protect the click tracking. If you change it old tracking links to external domains won\'t be registered anymore.', 'newsletter-statistics') ?> 
                </p>
            </td>
        </tr>        
    </table>
    <p>
        <?php $controls->button_save() ?>
    </p>
    </form>

    <table class="widefat" style="width: auto">
        <thead>
            <tr>
                <th>Id</th>
                <th><?php _e('Subject', 'newsletter')?></th>
                <th>Type</th>
                <th><?php _e('Status', 'newsletter')?></th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
                <th><?php _e('Tracking', 'newsletter')?></th>
                <th>&nbsp;</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($emails as &$email) { ?>
            <?php if ($email->type != 'message' && $email->type != 'feed') continue; ?>
                <tr>
                    <td><?php echo $email->id; ?></td>
                    <td><?php echo htmlspecialchars($email->subject); ?></td>
                    <td><?php echo $email->type; ?></td>
                    <td>
                            <?php
                            if ($email->status == 'sending') {
                                if ($email->send_on > time()) {
                                    _e('Scheduled', 'newsletter');
                                }
                                else {
                                    _e('Sending', 'newsletter');
                                }
                            } else  {
                                echo $email->status;
                            }
                            ?>
                    </td>
                    <td><?php if ($email->status == 'sent' || $email->status == 'sending') echo $email->sent . ' ' . __('of', 'newsletter'). ' ' . $email->total; ?></td>
                    <td><?php if ($email->status == 'sent' || $email->status == 'sending') echo $module->format_date($email->send_on); ?></td>
                    <td><?php echo $email->track==1?'Yes':'No'; ?></td>
                    <td>
                        <a class="button" href="<?php echo NewsletterStatistics::instance()->get_statistics_url($email->id); ?>">statistics</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

    <?php include NEWSLETTER_DIR . '/tnp-footer.php'; ?>
    
</div>