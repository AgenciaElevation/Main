<footer class="footer-01 md-skin-dark">
				<div class="footer-01__widget">
					<div class="container">
						<div class="row">
							<div class="col-md-6 col-lg-4 ">
								
								
								<section class="widget links">
									<div class="sec-title">
										<h3 class="sec-title__title">Links</h3><span class="sec-title__divider"></span>
									</div> 
									
									<p><a href="app/clientes/index.php" target="_blank"">Área do Cliente</a></p>
									<p><a href="politica.php">Política de Privacidade</a></p>
									<p><a href="termos.php">Termos e Condições</a></p>
									<p><a href="app/admin/login.php" target="_blank">Acesso Admin</a></p>
								</section>
								
							</div>
							<div class="col-md-6 col-lg-4 ">
								
								 
								<section class="widget">
									
									 
									<div class="sec-title">
										<h3 class="sec-title__title">Redes Sociais</h3><span class="sec-title__divider"></span>
									</div> 
									
									
									 
									<div class="social-list">
										<ul>
											<li><a href="<?= $linha['instagram'] ?>" aria-label="Nosso Instagram" target="_blank"><i class="fa-brands fa-instagram social"></i></a></li>
											<li><a href="<?= $linha['twitter'] ?>" aria-label="Nosso Twitter" target="_blank"><i class="fa-brands fa-twitter social"></i></a></li>
											<li><a href="<?= $linha['linkedin'] ?>" aria-label="Nosso Linkedin" target="_blank"><i class="fa-brands fa-linkedin social"></i></a></li>
											<li><a href="https://wa.me/<?= $linha['whats'] ?>" aria-label="Nosso Whatsapp"<i class="fa-brands fa-whatsapp social"></i></a></li>
										</ul>
									</div>
									
								</section> 
								
							</div>
							<div class="col-lg-4 ">
								<section class="widget">			 
									<div class="sec-title">
										<h3 class="sec-title__title hor">Horário de Trabalho</h3><span class="sec-title__divider"></span>
									</div> 
									
									<div>
									<div class="widget-contact__item mb-2"><span class="widget-contact__title">Horários:</span>
											<span class="widget-contact__text gold"><?=$linha['dias'] . ":   " . $inicio . " - " . $fim; ?></span>
									</div>
									<div class="widget-contact__item mb-2"><span class="widget-contact__title">Fone:</span>
											<span class="widget-contact__text gold"><?=$linha['fone']; ?></span>
									</div>
									<div class="widget-contact__item"><span class="widget-contact__title">email:</span>
											<span class="widget-contact__text"><a class="gold" href="mailto:<?=$linha['contato']; ?>"><?=$linha['contato']; ?></a></span>
									</div>

									</div> 
									
								</section> 
								
							</div>
						</div>
					</div>
				</div>
									
				 
				<div class="copyright-01 text-center">
					<div class="container">
						<p class="copyright-01__copy"><p>Copyright &copy; 2023 - <?php echo $linha['titulo']; ?></p>
						<p>Todos os direitos reservados - Proibida a reprodução parcial ou total</p>
					</div>
				</div>
			</footer>