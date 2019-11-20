<style>
    #audiencia #reunioes #workshop{
        color: #727272;
        font-family: 'Open Sans';
        font-size: 15px;
        font-weight: 400;
        letter-spacing: 0.2px;
        line-height: 25px;
        margin: 0 0 20px;
        word-wrap: break-word;
    }.
</style>

<table border="0" width="100%">
    <tbody>
        <tr>
            <td align="center">
                <a href="javascript: alterarText('1');">
                <img class="wp-image-249" src="http://www.planmob.hexti.com.br/wp-content/uploads/2017/07/Menu1-1-269x300.png" alt="" width="180" height="201" />
                </a>
            </td>
            
            <td align="center">
                <a href="javascript: alterarText('2');">
                    <img class="wp-image-250" src="http://www.planmob.hexti.com.br/wp-content/uploads/2017/07/Menu2-268x300.png" alt="" width="180" height="201" />
                </a>
            </td>
            
            <td align="center">
                <a href="javascript: alterarText('3');">
                    <img class="wp-image-251" src="http://www.planmob.hexti.com.br/wp-content/uploads/2017/07/Menu3-268x300.png" alt="" width="180" height="201" />
                </a>
            </td>
        </tr>
    </tbody>
</table>

<script type="text/javascript">
function alterarText(value) {
    if(value == 1){
         document.getElementById("audiencia").style.display = "";
         document.getElementById("reunioes").style.display = "none";
         document.getElementById("workshop").style.display = "none";
    }

    if(value == 2){
         document.getElementById("audiencia").style.display = "none";
         document.getElementById("reunioes").style.display = "";
         document.getElementById("workshop").style.display = "none";
    }

    if(value == 3){
         document.getElementById("audiencia").style.display = "none";
         document.getElementById("reunioes").style.display = "none";
         document.getElementById("workshop").style.display = "";
    }
}

</script>

<div id="audiencia" style="display: none; color:#727272; font-family: sans-serif;">
    <strong>Audiência Pública de Apresentação e do lançamento do site do PlanMob:</strong> dia 18/07/2017;<br>
    <strong>Audiência Pública sobre o Diagnóstico e Prognóstico da Mobilidade:</strong> a definir;<br>
    <strong>Audiência Pública sobre as Propostas para o PlanMob: </strong>a definir;<br>
    <strong>Audiência Pública do PlanMob de João Pessoa: </strong>a definir.<br>
</div>

<div id="reunioes" style="display: none; color:#727272; font-family: sans-serif;">
    <strong>Reuniões setoriais:</strong> de 31/07 à 11/08/2017.
</div>
<div id="workshop" style="display: none; color:#727272; font-family: sans-serif;">
    <strong>Workshops com sociedades civil organizadas:</strong> a definir.
</div>