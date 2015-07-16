<?php

/**
 * @file
 * Theme the button for the date component date popup.
 */
?>
<!-- id must match the label's for -->
<?php $idKey = str_replace('_', '-', $component['form_key']); ?>
<input type="text" id="edit-submitted-<?php print $idKey ?>" class="form-text <?php print implode(' ', $calendar_classes); ?>" alt="<?php print t('Open popup calendar'); ?>" title="<?php print t('Open popup calendar'); ?>" />


<script type="text/javascript">
(function ($) {
    $(document).ready(function() {
        var dateId = "edit-submitted-<?php print $idKey; ?>";
        var month = $('#' + dateId + '-month option:selected').text();
        var day = $('#' + dateId + '-day option:selected').text();
        var year = $('#' + dateId + '-year option:selected').text();
        if (month !== 'Month'){
            var date = new Date(month + ' ' + day +','+ year);
            $('#' + dateId).val($.datepicker.formatDate('yy-m-dd',date));
            $("label[for='" + dateId + "']").css({opacity:0});
        }
    });
})(jQuery);
</script>
