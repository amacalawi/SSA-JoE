<div class="panel panel-default panel-after-editor">
    <div class="panel-body">
        <h3>Centre Information</h3>
        <div>
            <table id="centre-information-container" class="form-table">
                <tr valign="top">
                    <th scope="row">
                        <label for="enroll_centre[info][address]"><strong><?php _e('Address', EnrollMS_TEXT_DOMAIN) ?></strong></label>
                    </th>
                    <td>
                        <input id="enroll_centre[info][address]" name="enroll_centre[info][address]" class="wide" type="text" value="<?php echo @$blanket_options['info']['address']?>" >
                        <p class="description">Centre Address</p>
                    </td>
                </tr>
                <tr valign="top">
                    <th scope="row">
                        <label for="enroll_centre[info][sched]"><strong><?php _e('Schedule Hours', EnrollMS_TEXT_DOMAIN) ?></strong></label>
                    </th>
                    <td>
                        <p><strong>Mon - Fri</strong></p>
                        <input id="enroll_centre[info][sched]" name="enroll_centre[info][sched]" type="text" value="<?php echo @$blanket_options['info']['sched']?>" >
                        <p class="description">Scheduling Hours</p>
                    </td>
                </tr>
                <tr valign="top">
                    <th scope="row">
                        <label for="enroll_centre[info][fees]"><strong><?php _e('Fees', EnrollMS_TEXT_DOMAIN) ?></strong></label>
                    </th>
                    <td>
                        <input id="enroll_centre[info][fees]" name="enroll_centre[info][fees]" type="text" value="<?php echo @$blanket_options['info']['fees']?>" >
                        <p class="description"></p>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</div>