{extends file="main.tpl"}

{block name=content}

<div style="width:90%; margin: 2em auto;">
            <style scoped="">
                .button-logout{
                    color: white;
                    border-radius: 5px;
                    background: rgb(230, 50, 50);
                    font-size: 120%;
                }
            </style>
            <a href="{$conf->action_url}logout"  class="button-logout pure-button">Wyloguj</a>
            <span style="float:right;">Użytkownik: {$user->login}, Rola: {$user->role}</span>
        </div>
	
    
    <div class="box">
	<div class="content">
            <h2 class="align-center" style="margin: 0em auto">Oblicz rezystor</h2>
            <hr />
            <div class="l-box-lrg pure-u-1 pure-u-med-2-5" style="width:40%;margin: 2em auto;">
		<form class="pure-form pure-form-stacked" action="{$conf->action_url}calcCompute" method="post">
                    <fieldset>
		<div class="field half first">
                    <label for="v1">Napięcie zasilania (V):</label>
                    <input name="v1" id="v1" type="text" placeholder="Napięcie zasilania (V)" value="{$form->v1}">
		</div>
		<div class="field half">
                    <label for="v2">Napięcie przewodzenia (V):</label>
                    <input name="v2" id="v2" type="text" placeholder="Napięcie przewodzenia (V)" value="{$form->v2}">
		</div>
		<div class="field half first">
                    <label for="amp">Prąd przewodzenia (mA):</label>
                    <input name="amp" id="amp" type="text" placeholder="Prąd przewodzenia (mA)" value="{$form->amp}">
		</div>
		<ul class="actions align-center">
                    <li><input value="Oblicz wartość rezystora" class="button special" type="submit"></li>
		</ul>
                    </fieldset>
		</form>
	</div>
    </div>
    </div>

<div style="width:90%; margin: 2em auto;">
    
{include file='messages.tpl'}

{if isset($resistor->resistor)}
	<h4>Wynik:</h4>
	<p class="res">
	{$resistor->resistor} Ohm
	</p>
{/if}
</div>
{/block}