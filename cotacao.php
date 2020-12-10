<?php include "header.php"; ?>

	<div class="inner-page-intro">
		<h4>Preencha o formulário para fazer a solicitação</h4>
	</div>

	<div class="two-third last">
    
	    <form id="contact-form" method="post" action="enviar_cotacao.php">
        	<p>Qual o tipo de Solicitação:</p>
			
			<input type="radio" name="solicitacao" value="Cotação"> Cotação<br />

			<input type="radio" name="solicitacao" value="Coleta"> Coleta<br /><br />
    		
    		<p>Informe seus dados pessoais:</p>
         	
         	<div class="one-third">
		        <fieldset>
					<label><strong>Nome</strong> *</label>
					<input type="text" name="nome" id="nome" value="" class="text requiredField"/>
				</fieldset>
        	</div>
         
         	<div class="one-third">
		        <fieldset>
					<label><strong>E-mail</strong>*</label>
					<input type="text" name="email" id="email" value="" class="text requiredField"/>
				</fieldset>
        	</div>
         
         	<div class="one-third">
		        <fieldset>
					<label><strong>Telefone</strong>*</label>
					<input type="text" name="telefone" id="telefone" value="" class="text requiredField"/>
				</fieldset>
            </div>
         
         	<div class="one-third">
		        <fieldset>
					<label><strong>Empresa</strong> *</label>
					<input type="text" name="empresa" id="empresa" value="" class="text requiredField"/>
				</fieldset>
        	</div>

         	<div class="one-third">
				<fieldset>
					<label><strong>Departamento</strong> *</label>
					<input type="text" name="departamento" id="departamento" value="" class="text requiredField"/>
				</fieldset>
            </div>
        	
        	<div class="one-third">
		        <fieldset>
					<label><strong>Endereço</strong> *</label>
					<input type="text" name="endereco" id="endereco" value="" class="text requiredField"/>
				</fieldset>
            </div>
         
         	<div class="one-third">
				<fieldset>
					<label><strong>Bairro</strong> *</label>
					<input type="text" name="bairro" id="bairro" value="" class="text requiredField"/>
				</fieldset>
            </div>
         
         	<div class="one-third">
		        <fieldset>
					<label><strong>Cidade</strong>*</label>
					<input type="text" name="cidade" id="cidade" value="" class="text requiredField"/>
				</fieldset>
            </div>
         	
         	<div class="one-third">
				<fieldset>
					<label><strong>Estado</strong> *</label>
					<input type="text" name="estado" id="estado" value="" class="text requiredField"/>
				</fieldset>
            </div>
            
            <br clear="all" />
         
         	<div class="one-third">
				<fieldset>
					<p>Informe os dados para cotação coleta:</p>

      				<label><strong>Envio</strong> *</label>
 					
 					<select name="envio">
						<option value="Nacional">Nacional</option>
						<option value="Internacional">Internacional</option>
					</select>
				</fieldset>
            </div>

            <br clear="all" />
        
        	<div class="one-third">
		        <fieldset>
					<label><strong>Cidade Destino</strong> *</label>
					<input type="text" name="cidade_destino" id="cidade_destino" value="" class="text requiredField"/>
				</fieldset>
            </div>
         	
         	<div class="one-third">
		        <fieldset>
					<label><strong>Quantidade</strong> *</label>
					<input type="text" name="quantidade" id="quantidade" value="" class="text requiredField"/>
				</fieldset>
            </div>
         
         	<div class="one-third">
				<fieldset>
					<label><strong>Peso</strong> *</label>
					<input type="text" name="peso" id="peso" value="" class="text requiredField subject"/>
				</fieldset>
            </div>
         	
         	<div class="one-third">
		        <fieldset>
					<label><strong>Altura</strong> *</label>
					<input type="text" name="altura" id="altura" value="" class="text requiredField"/>
				</fieldset>
            </div>
         
         	<div class="one-third">
				<fieldset>
					<label><strong>Largura</strong> *</label>
					<input type="text" name="largura" id="largura" value="" class="text requiredField"/>
				</fieldset>
            </div>
         	
         	<div class="one-third">
		        <fieldset>
					<label><strong>Comprimento</strong> *</label>
					<input type="text" name="comprimento" id="comprimento" value="" class="text requiredField"/>
				</fieldset>
            </div>
         
         	<div class="one-third">
				<fieldset>
					<label><strong>Data da Coleta</strong> *</label>
					<input type="text" name="data_coleta" id="data_coleta" value="" class="text requiredField"/>
				</fieldset>
    		</div>
         
         	<div class="one-third">
		        <fieldset>
					<label><strong>Horário</strong> *</label>
					<input type="text" name="horario" id="horario" value="" class="text requiredField"/>
				</fieldset>
            </div>
         
         	<div class="one-third">
        		<fieldset>
              		<label><strong>Necessita material</strong> *</label>
					<select name="material">
						<option value="Minuta">Minuta</option>
						<option value="Fita">Fita</option>
						<option value="Caixa">Caixa</option>
						<option value="Outros">Outros</option>
					</select>
				</fieldset>
            </div>
                        
            <br clear="all" />

         	<div class="one-third">
        		<fieldset>
					<input type="submit" name="Submit" value="Enviar" class="botao">
				</fieldset>
        	</div>
        </form>		
	</div>

<?php include "footer.php"; ?>