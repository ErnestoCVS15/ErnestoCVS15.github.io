<div class="registro container py-3">

    <h1>Registro</h1>
    <form id="frmcliente">
    <div class="row">
        <div class="col">
            <input type="text" class="form-control" id="email" placeholder="Nombre(s)..." name="nombre">
        </div>
        <div class="col">
            <input type="text" class="form-control" placeholder="Apellido Paterno..." name="apPaterno">
        </div>
        <div class="col">
            <input type="text" class="form-control" placeholder="Apellido Materno..." name="apMaterno">
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col">
            <input type="text" class="form-control" placeholder="Dirección..." name="direccion">
        </div>
        <div class="col">
            <input type="text" class="form-control" placeholder="Ciudad..." name="ciudad">
        </div>
        <div class="col">
            <input type="text" class="form-control" placeholder="Estado..." name="estado">
        </div>
        <div class="col">
            <input type="text" class="form-control" placeholder="Código Postal..." name="cp">
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col">
            <input type="mail" class="form-control" id="email" placeholder="Correo electrónico..." name="correo">
        </div>
        <div class="col">
            <input type="password" class="form-control" id="contraseña" placeholder="Contraseña..." name="password">
        </div>
        <div class="col">
            <input type="text" class="form-control" placeholder="Teléfono..." name="telefono">
        </div>
        <div class="col">
            <input type="text" class="form-control" id="celular" placeholder="Celular..." name="celular">
        </div>
        <div class="col">
        <button type="button" onclick="guardar('cliente','frmcliente');" class="btn btn-primary mt-3">Guardar</button>  
        </div>
    </div>
    </form>
</div>