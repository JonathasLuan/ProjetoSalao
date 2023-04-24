<div id="sidebar2">
    <div class="sidebar" id="right">
        <div class="chat-list">
            <nav id="menu-chat">
                <div class="btn-dropdown">
                    <button class="main-btn-a"><i class="fa fa-ellipsis-v" style="font-size: 20px;"></i></button>
                    <div class="btn-dropdown-child">
                        <nav id="">
                            <button id="chatbotao6" class="chat-menu-button" data-target="chatcontent2">Btn 6</button>
                            <button id="chatbotao7" class="chat-menu-button" data-target="chatcontent3">Btn 7</button>
                        </nav>
                    </div>
                </div>
                <button id="chatbotao1" class="chat-menu-button active" data-target="chatcontent1"><i
                        class="fa fa-home"></i></button>
                <button id="chatbotao2" class="chat-menu-button active" data-target="chatcontent2"><i
                        class="fa fa-bell"></i></button>
                <button id="chatbotao3" class="chat-menu-button" data-target="chatcontent3"><i
                        class="fa fa-comments"></i></button>
                <button id="chatbotao4" class="chat-menu-button" data-target="chatcontent4"><i
                        class="fa fa-calendar"></i></button>
                <button id="chatbotao5" class="chat-menu-button" data-target="chatcontent5"><i
                        class="fa fa-question"></i></button>
                <button id="chatbotao8" class="chat-menu-button" data-target="chatcontent4"><i class="fa fa-gear"
                        aria-hidden="true"></i></button>
            </nav>
        </div>
        <div id="chatconteudo">
            <div class="chatcontent active" id="chatconteudo1">
                <h2>Criar pedido:</h2>
                <p>Nesta área você pode criar um pedido de serviço, especificando as informações relevantes para
                    encontrar
                    profissionais adequados às suas necessidades.</p>
                <div id="chat-box">
                    <div id="criar-btn"><button id="servico-btn">+</button></div>
                    <div id="modal-servico" class="modal">
                        <div class="modal-content">
                            <span class="close">&times;</span>
                            <!-- aqui vai o conteúdo da janela modal -->
                            <div class="main">
                                <div class="formulario-container">
                                    <h2>Criar pedido de serviço</h2>
                                    <form action="processa_servico.php" method="POST">
                                        <div>
                                            <div class="divs">
                                                <label for="especialidade"
                                                    name="especialidade">Especialidade(s):</label>
                                                <div id="especialidade">
                                                    <div>
                                                        <input type="checkbox" class="entrada" id="cabeleireiro"
                                                            name="cabeleireiro">
                                                        <label for="cabeleireiro">Cabeleireiro</label>
                                                    </div>
                                                    <div>
                                                        <input type="checkbox" class="entrada" id="barbeiro"
                                                            name="barbeiro">
                                                        <label for="barbeiro">Barbeiro</label>
                                                    </div>
                                                    <div>
                                                        <input type="checkbox" class="entrada" id="maquiador"
                                                            name="maquiador">
                                                        <label for="maquiador">Maquiador</label>
                                                    </div>
                                                    <div>
                                                        <input type="checkbox" class="entrada" id="manicure"
                                                            name="manicure">
                                                        <label for="manicure">Manicure</label>
                                                    </div>
                                                    <div>
                                                        <input type="checkbox" class="entrada" id="pedicure"
                                                            name="pedicure">
                                                        <label for="maquiador">Pedicure</label>
                                                    </div>
                                                </div>
                                                <div>
                                                    <label for="outro">Outra:</label>
                                                    <input type="tecxt" id="outro" class="entrada" name="outro"></input>
                                                </div>
                                                <br><br>
                                                <label for="servico">Serviço(s):</label>
                                                <div id="servico">
                                                    <div>
                                                        <input type="checkbox" class="entrada" id="corte" name="corte">
                                                        <label for="corte">Corte</label>
                                                    </div>
                                                    <div>
                                                        <input type="checkbox" class="entrada" id="coloracao"
                                                            name="coloracao">
                                                        <label for="coloracao">Coloração</label>
                                                    </div>
                                                    <div>
                                                        <input type="checkbox" class="entrada" id="escova"
                                                            name="escova">
                                                        <label for="escova">Escova</label>
                                                    </div>
                                                    <div>
                                                        <input type="checkbox" class="entrada" id="hidratacao"
                                                            name="hidratacao">
                                                        <label for="hidratacao">Hidratação</label>
                                                    </div>
                                                    <div>
                                                        <input type="checkbox" class="entrada" id="reconstrucao"
                                                            name="reconstrucao">
                                                        <label for="reconstrucao">Reconstrução</label>
                                                    </div>
                                                </div>
                                                <div>
                                                    <label for="outro">Outro:</label>
                                                    <input type="tecxt" id="outro" class="entrada" name="outro"></input>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="divs">
                                                <div>
                                                    <label for="descricao">Descrição do serviço:</label>
                                                    <textarea id="descricao" name="descricao" rows="5"
                                                        cols="50"></textarea>
                                                </div>
                                                <div>
                                                    <label for="data">Data:</label>
                                                    <input type="date" id="data" name="data"><br>
                                                </div>
                                                <br>
                                                <div>
                                                    <label for="hora">Hora:</label>
                                                    <input type="time" id="hora" name="hora"><br>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <h2 style="margin-bottom: 50px;">Local</h2>
                                        <div class="divs">
                                            <div id="endereco-div">
                                                <div>
                                                    <label for="estado">Estado:</label>
                                                    <select id="estado" name="estado" class="entrada-endereco">
                                                        <option value="" selected disabled required>Selecione</option>
                                                        <option value="acre">Acre (AC)</option>
                                                        <option value="alagoas">Alagoas (AL)</option>
                                                        <option value="amapa">Amapá (AP)</option>
                                                        <option value="amazonas">Amazonas (AM)</option>
                                                        <option value="bahia">Bahia (BA)</option>
                                                        <option value="ceara">Ceará (CE)</option>
                                                        <option value="distritofederal">Distrito Federal (DF)</option>
                                                        <option value="espiritosanto">Espírito Santo (ES)</option>
                                                        <option value="goias">Goiás (GO)</option>
                                                        <option value="maranhao">Maranhão (MA)</option>
                                                        <option value="matogrosso">Mato Grosso (MT)</option>
                                                        <option value="matogrossodosul">Mato Grosso do Sul (MS)</option>
                                                        <option value="minasgerais">Minas Gerais (MG)</option>
                                                        <option value="para">Pará (PA)</option>
                                                        <option value="paraiba">Paraíba (PB)</option>
                                                        <option value="parana">Paraná (PR)</option>
                                                        <option value="pernambuco">Pernambuco (PE)</option>
                                                        <option value="piaui">Piauí (PI)</option>
                                                        <option value="riodejaneiro">Rio de Janeiro (RJ)</option>
                                                        <option value="riograndedonorte">Rio Grande do Norte (RN)
                                                        </option>
                                                        <option value="riograndedosul">Rio Grande do Sul (RS)</option>
                                                        <option value="rondonia">Rondônia (RO)</option>
                                                        <option value="roraima">Roraima (RR)</option>
                                                        <option value="santacatarina">Santa Catarina (SC)</option>
                                                        <option value="saopaulo">São Paulo (SP)</option>
                                                        <option value="sergipe">Sergipe (SE)</option>
                                                        <option value="tocantins">Tocantins (TO)</option>
                                                    </select>
                                                </div>

                                                <div>
                                                    <label for="cidade">Cidade:</label>
                                                    <input type="text" id="cidade" class="entrada-endereco"
                                                        name="cidade" required><br>
                                                </div>

                                                <div>
                                                    <label for="bairro">Bairro:</label>
                                                    <input type="text" id="bairro" class="entrada-endereco"
                                                        name="bairro"><br>
                                                </div>
                                            </div>
                                            <div style="display: flex; justify-content: space-around;">
                                                <div>
                                                    <label for="rua">Rua:</label>
                                                    <input type="text" id="rua" class="entrada-endereco" name="rua"><br>
                                                </div>
                                                <div>
                                                    <label for="numero">Número:</label>
                                                    <input type="text" id="numero" class="entrada-endereco"
                                                        name="numero"><br>
                                                </div>
                                                <div>
                                                    <label for="complemento">Complemento:</label>
                                                    <input type="text" id="complemento" class="entrada-endereco"
                                                        name="complemento"><br>
                                                </div>
                                            </div>
                                        </div>
                                        <div style="text-align: center;">
                                            <a href="#"><button type="submit">Criar</button></a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <script>
                        // Obtém a janela modal e o botão "LOGIN"
                        var modal = document.getElementById("modal-servico");
                        var btn = document.getElementById("servico-btn");

                        // Obtém o botão "Fechar" e adiciona um evento de clique
                        var span = document.getElementsByClassName("close")[0];
                        span.onclick = function () {
                            modal.style.display = "none";
                        }

                        // Adiciona um evento de clique para mostrar a janela modal quando o usuário clicar no botão "LOGIN"
                        btn.onclick = function () {
                            modal.style.display = "block";
                        }
                    </script>
                </div>
            </div>
            <div class="chatcontent hidden" id="chatconteudo2">
                <h2>Notificações:</h2>
                <p>Aqui ficará a exibição do conteúdo selecionado no menu superior do perfil. Não serão links,
                    mas sim botões que abrem conteúdo no espaço abaixo</p>
            </div>
            <div class="chatcontent hidden" id="chatconteudo3">
                <h2>Comentários:</h2>
                <p>Aqui ficará a exibição do conteúdo selecionado no menu superior do perfil. Não serão links,
                    mas sim botões que abrem conteúdo no espaço abaixo</p>
            </div>
            <div class="chatcontent hidden" id="chatconteudo4">
                <h2>Agendamentos:</h2>
                <p>Aqui ficará a exibição do conteúdo selecionado no menu superior do perfil. Não serão links,
                    mas sim botões que abrem conteúdo no espaço abaixo</p>
            </div>

            <div class="chatcontent hidden" id="chatconteudo5">
                <h2>FAQ - Perguntas Frequentes:</h2>
                <p>Aqui ficará a exibição do mapa da regiaão escolhida e os profissionais ou clientes em um raio de
                    proximidade delimitado.</p>
            </div>
            <div class="chatcontent hidden" id="chatconteudo6">
                <h2>Conteúdo 6:</h2>
                <p>Aqui ficará a exibição do conteúdo selecionado no menu superior do perfil. Não serão links,
                    mas sim botões que abrem conteúdo no espaço abaixo</p>
            </div>
            <div class="chatcontent hidden" id="chatconteudo7">
                <h2>Conteúdo 7:</h2>
                <p>Aqui ficará a exibição do conteúdo selecionado no menu superior do perfil. Não serão links,
                    mas sim botões que abrem conteúdo no espaço abaixo</p>
            </div>
            <div class="chatcontent hidden" id="chatconteudo8">
                <h2>Configurações:</h2>
                <p>Aqui ficará a exibição do conteúdo selecionado no menu superior do perfil. Não serão links,
                    mas sim botões que abrem conteúdo no espaço abaixo</p>
            </div>
        </div>
    </div>
</div>