// Definição de uma nota do piano
define(function() {
	return function(path) {
	// gera um novo elemento 'audio'
	this.audio = document.createElement("audio");
	
	// gera um elemento 'source' que serÃ¡ filho de 'audio'
	this.src1 = document.createElement("source");
	// o atributo 'src' do elemento src1 Ã© setado para o caminho do arquivo com extensÃ£o .ogg
	// o parÃ¢metro 'path' Ã© o caminho para os arquivos com os sons
	this.src1.setAttribute("src", path + ".ogg");
	this.src1.setAttribute("type", "audio/ogg");
	// 'src1' Ã© anexado ao elemento 'audio'
	this.audio.appendChild(this.src1);
	
	// gera um elemento 'source' que serÃ¡ filho de 'audio'
	// este elemento source Ã© necessÃ¡rio para navegadores que nÃ£o suportam audio no formato ogg (IE9 e Safari)
	this.src2 = document.createElement("source");
	// o atributo 'src' do elemento srcÂ´2 Ã© setado para o caminho do arquivo com extensÃ£o .mp3
	// o parÃ¢metro 'path' Ã© o caminho para os arquivos com os sons
	this.src2.setAttribute("src", path + ".mp3");
	this.src2.setAttribute("type", "audio/mp3");
	// 'src2' Ã© anexado ao elemento 'audio'
	this.audio.appendChild(this.src2);
	
	// a hierarquia do elemento <audio> serÃ¡ da seguinte forma:
	// <audio>
	//   <source src="sons/[arquivo].ogg" type="audio/ogg" />
	//   <source src="sons/[arquivo].mp3" type="audio/mp3" />
	// </audio>
	//
	// o navegador tentarÃ¡ carregar o arquivo no primeiro elemento <source>
	// caso nÃ£o seja capaz de reproduzir, ele tentarÃ¡ carregar o arquivo do segundo elmento <source>
	//
	// mais elementos 'source' podem ser definidos e o navegador utilizarÃ¡ o primeiro que for capaz de reproduzir

	// atributo executando indica se a nota estÃ¡ em execução
	this.executando = false;
	// função que reproduz o som do arquivo
	this.play = function() {
		// verifica se a nota jÃ¡ estÃ¡ sendo executada
		if (!this.executando) {	
			// se nÃ£o estiver, o atributo Ã© mudado para true		
			this.executando = true;
			// pausa a execução anterior da nota
			this.audio.pause();
			// retorna o tempo da nota para o inÃ­cio
			this.audio.currentTime = 0;
			// reproduz o som
			this.audio.play();
		}
	};
	// função que interrompe a execução da nota
	this.stop = function() {
		// modifica o atributo para false
		this.executando = false;
		// pausa a execução da nota
		this.audio.pause();
		// retorna o tempo da nota para o inÃ­cio
		this.audio.currentTime = 0;
	};
};
});