<script id="view-picks-template" type="text/x-handlebars-template">
{{#each weeks}}
    <div id="view-picks-{{id}}-accordion" class="panel-group">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#view-picks-{{id}}-accordion" href="#view-picks-{{id}}-panel">
                        {{week}}
                        <span class="dates">{{dates}}</span>
                    </a>
                </h4>
            </div>

            <div id="view-picks-{{id}}-panel" class="panel-collapse collapse">
                <div class="panel-body">
                This is a test.
                </div>
            </div>
        </div>
    </div>
{{/each}}
</script>