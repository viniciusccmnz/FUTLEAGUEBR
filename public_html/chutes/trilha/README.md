# Trilha - FutLeagueBR

## Descrição
Nova implementação da trilha baseada no sistema do ptgol, substituindo a versão anterior do Construct.

## Arquivos Principais

### `index.php`
- Página principal da trilha
- Verifica se o usuário pode jogar
- Exibe o jogo ou mensagem de aguarde
- Gerencia o sistema de bless e habilidades

### `nova_trilha.js`
- Lógica principal do jogo
- Funções para zaga, meio e área
- Sistema de sorte e bless
- Animações e efeitos visuais

### `media/css/style3.css`
- Estilos CSS para o jogo
- Posicionamento dos elementos
- Animações e transições

## Como Jogar

1. **Zaga**: Clique em uma das 4 posições da zaga
2. **Meio**: Após passar pela zaga, escolha uma posição do meio
3. **Área**: Finalize escolhendo uma posição da área para chutar

## Sistema de Bless

- **Bless Ativo**: Aumenta as chances de sucesso
- **Habilidade Trilha**: Permite abrir posições adicionais

## Estrutura de Pastas

```
chutes/trilha/
├── index.php              # Página principal
├── trilha.html            # HTML do jogo
├── nova_trilha.js         # JavaScript do jogo
├── conn.php               # Conexão com banco
├── retorno16.php          # Computar gols
├── retorno17.php          # Computar erros
├── media/
│   ├── css/
│   │   └── style3.css     # Estilos CSS
│   └── Fonts/
│       └── swiss.ttf      # Fonte do jogo
├── img/                   # Imagens do jogo
└── README.md              # Este arquivo
```

## Integração

A trilha está integrada ao sistema principal através de:
- `paginas/calendario.php` - Exibição no calendário
- Sistema de cronômetros independentes
- Verificação de permissões e tempo de espera

## Personalização

Para personalizar a trilha:
1. Modifique `nova_trilha.js` para alterar a lógica
2. Ajuste `style3.css` para mudar a aparência
3. Substitua as imagens na pasta `img/`
4. Atualize `retorno16.php` e `retorno17.php` para lógica de pontuação

## Suporte

Esta implementação substitui completamente a versão anterior do Construct, oferecendo:
- Melhor performance
- Código mais limpo e manutenível
- Integração nativa com o sistema
- Interface responsiva e moderna
