<script id="schedule-template" type="text/x-handlebars-template">
{{#each weeks}}
<div class="panel-group" id="accordion">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#panel-{{id}}">
                    {{week}}
                    <span class="dates">{{dates}}</span>
                </a>
            </h4>
        </div>

        <form method="POST" action="handlers/{{id}}.php" name="{{id}}" id="{{id}}">
            <div id="panel-{{id}}" class="panel-collapse collapse">
                <h6 class="form-instructions">Pick games by clicking team icons, then click the submit button at the bottom of the form.</h6>
                <div class="panel-body">
                    <form id="{{id}}-form" name="{{id}}-form" method="POST" action="home.php">
                    {{#each games}}
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <div class="team-icons-container">
                                    <span id="{{id}}-gametime" data-gametime="{{gametime}}" class="bottom-right gametime"></span>
                                    <label class="away-team-container team-container">
                                        <img src="img/{{away}}.png" alt="{{away}}" id="{{id}}-away" class="pick-logo" />
                                        <input type="radio" id="{{id}}" name="{{id}}" value="{{away}}" />
                                        <p class="team-name">{{away}}</p>
                                    </label>
                                    <span class="at">@</span>
                                    <label class="home-team-container team-container">
                                        <img src="img/{{home}}.png" alt="{{home}}" id="{{id}}-home" class="pick-logo" />
                                        <input type="radio" id="{{id}}" name="{{id}}" value="{{home}}" />
                                        <p class="team-name">{{home}}</p>
                                    </label>
                                </div>
                            </div>
                        </div>
                    {{/each}}
                        <table class="submit-button-container">
                            <tr>
                                <td align="center">
                                    <label for="{{id}}-tiebreaker">Total points on Monday night:</label>
                                    <input type="text" name="{{id}}-tiebreaker" id="{{id}}-tiebreaker" />
                                </td>
                            </tr>
                            <tr>
                                <td align="center">
                                    <input type="submit" name="{{id}}-submit" id="{{id}}-submit" value="Submit {{week}} Picks" class="btn btn-success submit-picks-btn" />
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
        </form>
    </div>
</div>
{{/each}}
</script>
