
<div class ="container2">
    <header class="frase">
        <h2 class="textcenter description">Diga nos um feedback sobre o site!</h2>
    </header>

    <form method="POST" action="formulariodb.php">
        <div class="form-group">
            <label for="name" id="name">Nome</label>
            <input type="text" class="form-control" name="nome" placeholder="Digite seu nome" required>
        </div>
        <div class="form-group">
            <label for="age" id="age">Idade</label>
            <input type="text" class="form-control" name="age" placeholder="Digite sua idade" required>
        </div>
        <div class="form-group">
            <label for="email" id="email">E-mail</label>
            <input type="email" class="form-control" name="email" placeholder="Digite seu e-mail" required>
        </div>
        <div class="form-group">
            <label for="telefone" id="telefone">Telefone</label>
            <input type="number" class="form-control" name="telefone" placeholder="Digite seu telefone" >
        </div>
        <div class="form-group">
            <p>Sexo</p>
            <label>
                <input type="radio" class="input-radio" name="sexo" value="Masculino" required>Masculino</label></br>
            <label>
                <input type="radio" class="input-radio" name="sexo" value="Feminino" required>Feminino</label></br>
                <label>
                    <input type="radio" class="input-radio" name="sexo" value="Outro" required>Outro</label>
        </div>
        <div class="form-group">
            <label for="endereço" id="endereço">Endereço</label>
            <input type="texto" class="form-control" name="endereço" placeholder="Digite seu endereço" required >
        </div>
        <div class="form-group">
            <p>Deixe um comentário!</p>
            <textarea id="comentario" class="input-textarea"  class="form-control"s name="comentario" placeholder="Faça aqui seu comentário">
            </textarea>
       
            <div class="form-group">
                <button type="submit" id="submit" class="submit-button">Enviar</button>
            </div>

    </form>
</div>