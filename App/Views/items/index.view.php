
<div class="container-fluid col-11 mx-auto">
<h1>Hello my little padawan...</h1>
<p>Benvinguts i benvingudes a l'examen de M7! Abans de començar, recordeu prendre un moment per relaxar-vos. Respira profundament i recorda que tens les habilitats necessàries per afrontar aquest repte amb confiança. Aquest examen és una oportunitat per demostrar tot el que saps i gaudir de la programació web. Mantingues la calma, concentra't... Espero que gaudeixis!<p>
    <p>A continuació teniu els ítems de valoració. El professor es reserva el dret de modificar-ne algun si troba algun error.</p>
    

    <table class="table">
        <h2>Ítems valoració</h2>
        
            <thead>
                <tr>
                    <th scope="col">Item</th>
                    <th scope="col">Punts</th>
                    <th scope="col">Fet?</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="font-weight-bold text-danger">HOME</td>
                    <td class="font-weight-bold text-danger"></td>
                    <td></td>
                </tr>

                <tr>
                    <td>Al anar a localhost, es carreguen totes les dades de resetController a la base de dades i es carrega la pàgina amb el formulari per crear un ticket.</td>
                    <td>1</td>

                    <td><input type="checkbox"></td>
                </tr>
                <tr class="bg-light">
                    <td>Al navbar tenim les següents opcions: Home, reset, login & items. La resta d'opcions, estan amagades.</td>
                    <td>1</td>

                    <td><input type="checkbox"></td>
                </tr>
                <tr>
                    <td>Hi ha un select que mostra tots els dispositius que hi ha a la base de dades.</td>
                    <td>2</td>

                    <td><input type="checkbox"></td>
                </tr>
                <tr class="bg-light">
                    <td>Si al crear un ticket, deixo el camp "Ticket Description" en blanc, ens mostra un missatge de tipus alert vermell que desapareix al actualitzar la pàgina.</td>
                    <td>1</td>

                    <td><input type="checkbox"></td>
                </tr>
                <tr>
                    <td>Si s'omplen tots els camps de forma correcta, es guarda el ticket a la base de dades. Al ticket s'assigna l'estat amb id 1 i els camps id_user i solution_description es deixen com a null.</td>
                    <td>2</td>

                    <td><input type="checkbox"></td>
                </tr>
                <tr class="bg-light">
                    <td>Un cop desat el ticket es retorna a l'usuari a la mateixa vista i se li mostra un missatge flash de color verd indicant que el ticket s'ha desat correctament. El missatge flash desapareix al actualitzar la pàgina.</td>
                    <td>1</td>

                    <td><input type="checkbox"></td>
                </tr>
                <tr>
                    <td class="font-weight-bold text-danger">LOGIN</td>
                    <td class="font-weight-bold text-danger"></td>
                    <td></td>
                </tr>
                <tr class="bg-light">
                    <td>Si deixem algun camp del formulari de login buit ens torna a la vista amb un missaatge flash dient que tots els camps són necessaris. El missatge flash, desapareix al actualitzar la pàgina</td>
                    <td>1</td>

                    <td><input type="checkbox"></td>
                </tr>
                <tr>
                    <td>Si les credencials no són correctes, ens torna a la vista amb un missaatge flash dient que tots els camps són necessaris. El missatge flash, desapareix al actualitzar la pàgina</td>
                    <td>2</td>

                    <td><input type="checkbox"></td>
                </tr>
                <tr class="bg-light">
                    <td>Si les credencials són correctes, es redirigeix a l'usuari a la vista on es mostra la informació requerida dels tiquets associats al nivell de l'usuari. En aquest cas no es tenen en compte els botons.</td>
                    <td>3</td>

                    <td><input type="checkbox"></td>
                </tr>



                <tr>
                <td class="font-weight-bold text-danger">TÈCNICS - LOGUEJAR-SE AMB TÈCNIC DE NIVELL 1</td>
                    <td class="font-weight-bold text-danger"></td>
                    <td></td>
                </tr>

                <tr class="bg-light">
                    <td>Si és logueja un usuari, al capdamunt de la pàgina surt el títol "Tickets" i al costat s'indica el nivell al que pertany el tècnic. Per exemple Level 1</td>
                    <td>1</td>

                    <td><input type="checkbox"></td>
                </tr>
                <tr>
                    <td>Els tiquets els quals no han estat agafats per cap tècnic (estat "received"), tenen la opció de ser eliminats a través d'un botó vermell (reject).</td>
                    <td>1</td>

                    <td><input type="checkbox"></td>
                </tr>

                <tr class="bg-light">
                    <td>Es possible eliminar un Ticket de la base de dades a través del botó indicat al punt anterior.</td>
                    <td>2</td>

                    <td><input type="checkbox"></td>
                </tr>
                <tr>
                    <td>Es possible clicar sobre "Get" per assumir un ticket. Al fer-ho el ticket canvia a l'estat "In process"  i s'assigna a l'usuari que està loguejat.</td>
                    <td>2</td>

                    <td><input type="checkbox"></td>
                </tr>
                <tr class="bg-light">
                    <td>Un cop assignat, a l'usuari se li obre una opció per solucionar el ticket o escalar-lo.</td>
                    <td>2</td>

                    <td><input type="checkbox"></td>
                </tr>
                <tr>
                    <td>L'usuari pot posar un text que expliqui la solució adoptada i clicar sobre "Solve". El ticket canvia d'estat a "Solved", i totes les dades es guarden correctament a la base de dades.</td>
                    <td>2</td>

                    <td><input type="checkbox"></td>
                </tr>
                <tr class="bg-light">
                    <td>Un cop fet el pas anterior, el ticket passa a tenir només un botó de color verd, on diu "Solved" i està deshabilitat.</td>
                    <td>1</td>

                    <td><input type="checkbox"></td>
                </tr>
                <tr>
                    <td>Els tickets que estan ja assignats a una altra persona, apareixen en gris i deshabilitats. Al botó hi surt el username de la persona que el té assignat.</td>
                    <td>2</td>

                    <td><input type="checkbox"></td>
                </tr>
                <tr class="bg-light">
                    <td>Si un ticket és escalat, aquest canvia a estat "Escalated", per tant desapareix de la vista del tècnic de nivell 1, i deixa d'estar assignat a l'usuari al que estava assignat.</td>
                    <td>2</td>

                    <td><input type="checkbox"></td>
                </tr>
                <tr>
                <td class="font-weight-bold text-danger">TÈCNICS - LOGUEJAR-SE AMB TÈCNIC DE NIVELL 2</td>
                    <td class="font-weight-bold text-danger"></td>
                    <td></td>
                </tr>
                <tr class="bg-light">
                    <td>Al loguejar-se, el tècnic de nivell 2 veu els tickets (amb tota la informació) en estat escalated amb un botó verd (Get) que els permet gestionar la incidència. Al clicar sobre el botó, s'habilita un input on pot posar la solució i donar per solventada la incidència.</td>
                    <td>3</td>

                    <td><input type="checkbox"></td>
                </tr>
                <tr>
                    <td>El tècnic de nivell 2, pot solventar la incidència i queden registrades totes les dades a la base de dades.</td>
                    <td>2</td>

                    <td><input type="checkbox"></td>
                </tr>

                <td class="font-weight-bold text-danger">PROTECCIÓ RUTES</td>
                    <td class="font-weight-bold text-danger"></td>
                    <td></td>
                </tr>
                <tr class="bg-light">
                    <td>La ruta ticket/index està protegida i només és accessible per usuaris loguejats</td>
                    <td>2</td>

                    <td><input type="checkbox"></td>
                </tr>
                <td class="font-weight-bold text-danger">ESTRUCTURA I CODI</td>
                    <td class="font-weight-bold text-danger"></td>
                    <td></td>
                </tr>
                <tr class="bg-light">
                    <td>Estructura codi, arquitectura, no es treballa amb variables de sessió a les vistes...</td>
                    <td>6</td>

                    <td><input type="checkbox"></td>
                </tr>
                <tr>
                    <td></td>
                    <td class="font-weight-bold text-danger">TOTAL</td>
                    <td class="font-weight-bold text-danger">42</td>
                    <td></td>
                </tr>

            </tbody>

        </table>
    </div>