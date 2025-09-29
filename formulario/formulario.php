<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<div class="titulo">Formulário</div>

<h2>Cadastro</h2>



<form action="#" method="post">
    <div class="row" mb-3>
        <div class="col-md-9">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome"
                value="<?= $_POST['nome'] ?>">

        </div>
        <div class="col-md-3">
            <label for="nascimento">Nascimento</label>
            <input type="text" class="form-control" id="nascimento" name="nascimento" placeholder="Data de nascimento"
                value="<?= $_POST['nascimento'] ?>">
        </div>
    </div>
    <div class="row" mb-3>
        <div class="col-md-6">
            <label for="email">E-mail</label>
            <input type="text" class="form-control" id="email" name="email" placeholder="Email"
                value="<?= $_POST['email'] ?>">
        </div>
        <div class="col-md-6">
            <label for="site">Site</label>
            <input type="text" class="form-control" id="site" name="site" placeholder="Site"
                value="<?= $_POST['site'] ?>">
        </div>
    </div>
    <div class="row" mb-3>
        <div class="col-md-6">
            <label for="filhos">Qtds de filhos</label>
            <input type="text" class="form-control" id="filhos" name="filhos" placeholder="Filhos"
                value="<?= $_POST['filhos'] ?>">
        </div>
        <div class="col-md-6">
            <label for="salario">Salário</label>
            <input type="text" class="form-control" id="salario" name="salario" placeholder="Salário"
                value="<?= $_POST['salario'] ?>">
        </div>
    </div>
</form>