<!DOCTYPE html>
<html lang="pt-br">

<?php include_once("modelo/head.html") ?>

<body>
    <div class=" container">
        <?php include_once("modelo/header.html") ?>
        <?php include_once("modelo/menu.html") ?>

    </div>
    <main role="main" class="container">
        <div class="row">
            <div class="col-md-8 blog-main">
                <h3 class="mt-5 pb-3 mb-4 font-italic border-bottom">
                    Cadastre-se
                </h3>

                <div class="blog-post">

                </div>
                <main>
                    <form>
                    <label for="nomesobrenome">Nome e sobrenome</label>
                    <input type="text" id="nomesobrenome" class="input-padrao" required>

                    <label for="email">Email</label>
                    <input type="email" id="email" class="input-padrao" required placeholder="seuemail@dominio.com">

                    <label for="telefone">Telefone</label>
                    <input type="tel" id="telefone" class="input-padrao" required placeholder="(XX) XXXXX-XXXX">

                    <label for="mensagem">Mensagem</label>
                    <textarea cols="70" rows="10" id="mensagem" class="input-padrao" required></textarea>

                    <fieldset>
                        <legend>Como prefere o nosso contato?</legend>
                        <label for="radio-email"><input type="radio" name="contato" value="email" id="radio-email">
                            Email</label>

                        <label for="radio-telefone"><input type="radio" name="contato" value="telefone"
                                id="radio-telefone"> Telefone</label>

                        <label for="radio-whatsapp"><input type="radio" name="contato" value="whatsapp"
                                id="radio-whatsapp" checked> WhatsApp</label>
                    </fieldset>

                    <fieldset>
                        <legend>Qual horário prefere ser atendido?</legend>
                        <select>
                            <option>Manhã</option>
                            <option>Tarde</option>
                            <option>Noite</option>
                        </select>
                    </fieldset>

                    <label class="checkbox"><input type="checkbox" checked>Gostaria de receber nossas novidades por
                        email?</label>

                    <input type="submit" value="Enviar formulário" class="enviar">
                </form>

                <table>
                    <thead>
                        <tr>
                            <th>Dia</th>
                            <th>Horário</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Segunda</td>
                            <td>8h ~ 20h</td>
                        </tr>
                        <tr>
                            <td>Quarta</td>
                            <td>8h ~ 20h</td>
                        </tr>
                        <tr>
                            <td>Sexta</td>
                            <td>8h ~ 20h</td>
                        </tr>
                    </tbody>
                </table>
                </main>
            </div>
            <?php include_once("modelo/aside.html") ?>

        </div>
    </main>
    <?php include_once("modelo/footer.html") ?>
</body>

</html>