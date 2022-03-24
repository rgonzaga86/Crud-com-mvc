<section class="mt-4">
			<div class="titulo h5 mb-0"><h2>Formulario de cadastro Cliente</h2></div>
				<div class="base-form">
					<div class="caixa-form">
						<form action="<?php echo URL_BASE."cliente/salvar" ?>" method="POST">				
							<div class="rows">
								<div class="col-12 d-flex text-justify-center">
									<span href="" class="msg msg-verde mx-3"><i class="fas fa-check"></i> Cadastro realizado com sucesso <a href="javascrip:;" onclick="fecharMsg()" class="fas fa-times float-right"></a></span>
									<span href="" class="msg msg-vermelho mx-3"><i class="fas fa-exclamation-triangle"></i> O campo é obrigatório <a href="javascript:;" onclick="fecharMsg()" class="fas fa-times float-right"></a></span>
				
								</div>				
							</div>				
							<div class="rows msg-form">	
							  <div class="col-3 position-relative">									
									<img src="img/img-usuario.png" class="img-fluido foto">
									<div  class="foto-file">
										<input type="file" id="editarFoto"><label for="editarFoto"><span>Editar foto</span></label>
									</div>
									<small class="d-block text-center pt-1 pb-2"><b>nome_do_arquivo.jpg</b></small>
								</div>
								
								<div class="col-9">
								<div class="rows">
									<div class="col-8">
										<label>Nome</label>
										<input name="nome" value="<?php echo isset($cliente) ? $cliente->nome : "" ?>" type="text" placeholder="Insira um nome" class="form-campo">
									</div>
								<div class="col-4">
									<label>CPF</label>
									<input name="cpf" value="<?php echo isset($cliente) ? $cliente->cpf : "" ?>" type="text" placeholder="Insira seu CPF" class="form-campo">
								</div>									
									<div class="col-3">
										<label>dtnasc</label>
										<input name="dtnasc" value="<?php echo isset($cliente) ? $cliente->dtnasc : "" ?>" type="date" placeholder="Insira seu nascimento" class="form-campo">
									</div>							
																									
									<div class="col-6">
										<label>Email</label>
										<input name="email" value="<?php echo isset($cliente) ? $cliente->email : "" ?>" type="text" placeholder="Insira seu Email" class="form-campo">
									</div>
									<div class="col-3">
										<label>Celular</label>
										<input name="celular" value="<?php echo isset($cliente) ? $cliente->celular : "" ?>" type="text" placeholder="Insira seu Celular" class="form-campo">
									</div>
									
																			
																
								
								<div class="col-4 m-auto">
									<input type="hidden" name="idcliente" value="<?php echo isset($cliente) ? $cliente->idcliente : null ?>" />
									<input type="submit" value="Cadastrar" class="btn btn-verde width-100">
								</div>
								
								</div>
								</div>
								
						</form>
					</div>
				</div>
			</div>
</section>