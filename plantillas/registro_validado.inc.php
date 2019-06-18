
<div class="form-group">
                            <label>nombre del usuario</label>
                            <input type="text" class="form-control" name="nombre" placeholder="usuario123" <?php 
                            $validador -> mostrar_nombre()?>
                                   <?php
                                   $validador -> mostrar_error_nombre();
                                   ?>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" name="email"placeholder="usuario@mail.com"<?php 
                            $validador -> mostrar_email()?>
                                   <?php
                                   $validador -> mostrar_error_email();
                                   ?>
                        </div>
                        <div class="form-group">
                            <label>constraseña</label>
                            <input type="password" class="form-control" name="password"placeholder="****">
                       <?php
                                   $validador -> mostrar_error_password();
                                   ?>
                        </div>
                        <div class="form-group">
                            <label>repite la contraseña</label>
                            <input type="password" class="form-control" name="password1" placeholder="****">
                        <?php
                                   $validador -> mostrar_error_password1();
                                   ?>
                        </div>
                                                
                        <!--<button type="submit" class="btn btn-primary" name="enviar"> enviar</button>-->