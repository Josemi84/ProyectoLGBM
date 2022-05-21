<div class="content mt-5">
    <div class="calendar-container p-3">
        <div class="calendar">
            <div class="year-header">
                <span class="left-button" id="prev"> &lang; </span>
                <span class="year" id="label"></span>
                <span class="right-button" id="next"> &rang; </span>
            </div>
            <table class="months-table">
                <tbody>
                    <tr class="months-row">
                        <td class="month">Ene</td>
                        <td class="month">Feb</td>
                        <td class="month">Mar</td>
                        <td class="month">Abr</td>
                        <td class="month">May</td>
                        <td class="month">Jun</td>
                        <td class="month">Jul</td>
                        <td class="month">Ago</td>
                        <td class="month">Sep</td>
                        <td class="month">Oct</td>
                        <td class="month">Nov</td>
                        <td class="month">Dic</td>
                    </tr>
                </tbody>
            </table>

            <table class="days-table">
                <td class="day">Dom</td>
                <td class="day">Lun</td>
                <td class="day">Mar</td>
                <td class="day">Mie</td>
                <td class="day">Jue</td>
                <td class="day">Vie</td>
                <td class="day">Sab</td>
            </table>
            <div class="frame">
                <table class="dates-table" style="width: 100%;">
                    <tbody class="tbody">
                    </tbody>
                </table>
            </div>
            <button class="button" id="add-button">Añadir Evento</button>
        </div>
    </div>
    <div class="events-container">
    </div>
    <div class="dialog" id="dialog">
        <h2 class="dialog-header"> Añadir nuevo evento </h2>
        <form class="form" id="form">
            <div class="form-container text-center">
                <label class="form-label" id="valueFromMyButton" for="name">Nombre del Evento</label>
                <input class="input mr-1" type="text" id="name" maxlength="36" style="margin-left: 7em;">
                <label class="form-label" id="valueFromMyButton" for="count">Número de personas invitadas</label>
                <input class="input" type="number" id="count" min="1" max="1000000" maxlength="7" style="margin-left: 7em;">
                <input type="button" value="Cancelar" class="button" id="cancel-button">
                <input type="button" value="OK" class="button" id="ok-button">
            </div>
        </form>
    </div>
</div>