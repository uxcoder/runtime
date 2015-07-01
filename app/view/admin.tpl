<div class="container">
    <div class="u-full-width">
        <h4>Admin</h4>
        {if $message}
            <div class="infoblock">
                {$message}
            </div>
        {/if}
        <p>Enter your data here</p>
        <form
            id="heart_rate"
            action=""
            method="post">
            <input type="hidden" name="action" value="save">
            <div class="row">
                <div class="u-full-width">
                    <label for="heart_rate_input">Enter your heart rate</label>
                    <input
                        class="u-full-width"
                        placeholder=""
                        id="heart_rate_input"
                        type="text"
                        name="heart_rate">
                </div>
            </div>
            <input class="button-primary" value="Save" type="submit">
        </form>
    </div>
</div>
