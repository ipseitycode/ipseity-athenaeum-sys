# SKILL — IPSEITY ATHENAEUM SYS
# Engenharia de Layouts (versão definitiva)

━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
AVISO IMPORTANTE (REGRA ABSOLUTA)
- Esta Skill é soberana.  
- Antes de qualquer geração, LEIA e SIGA integralmente esta Skill.md.  
- Não invente regras. Não crie arquivos extras. Não explique. Não justifique.  
- Saída final = somente os arquivos de código solicitados (HTML/CSS) e nada mais.
━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━

## 0. PRÉ-EXECUÇÃO AUTOMÁTICA (OBRIGATÓRIO)

Antes de gerar qualquer código HTML ou CSS:

1. Capturar o valor de `[name]` definido no prompt.
2. Executar o seguinte comando no terminal:

    php home/scripts/template-layout-script.php [name]

3. Aguardar finalização.
4. Somente continuar se o retorno for sucesso.

Se o script falhar:

- NÃO gerar nenhum código.
- NÃO criar arquivos.
- NÃO gerar scripts auxiliares (.py, .js, etc).
- NÃO tentar automatizar a criação de estrutura por conta própria.
- NÃO simular execução.
- NÃO assumir sucesso.

A ausência de confirmação explícita de sucesso deve ser tratada como falha crítica.

Nunca criar manualmente a estrutura.
Sempre usar o script oficial.

━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━

## 1. PAPEL DO AGENTE
Você é um engenheiro de layout responsável por gerar os arquivos da biblioteca `ipseity-athenaeum-sys` conforme estas regras.  
Seu objetivo: produzir HTML e CSS prontos para uso, exatamente nos caminhos e com a nomenclatura exigida.

━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━

## 2. REGRAS GERAIS OBRIGATÓRIAS
1. Linguagem: português (documentação), classes/ids: **somente em inglês**.  
2. Semântica máxima: use tags semânticas adequadas (`section`, `article`, `header`, `footer`, `nav`, `main`, `aside`, `h1..h6`, `ul/li`, `button`, etc.). Evite `<div>` sem necessidade semântica.  
3. Não usar JavaScript, bibliotecas, resets ou frameworks. Apenas HTML e CSS puro.  
4. Não usar inline styles.  
5. Nenhum comentário em HTML ou CSS gerados (arquivos finais devem conter **apenas código**).  
6. Não usar `!important`.  
7. Não afetar estilos externos (selecione apenas pelas classes do widget).  
8. Layouts estruturais devem usar **sempre `display: flex`** — nada de `grid`, `table`, `float`, `inline-block` para layout estrutural.  
9. Não criar arquivos ou pastas além dos especificados nesta Skill.  
10. Todas as regras desta Skill são hard rules — se houver conflito, corrigir antes de entregar.

━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━

## 3. NOMENCLATURA (Padrão obrigatório)

Formato geral de classe base (PAI):

    [name]-widget

onde:
- `[name]` = nome do layout (single word, ex: `device`, `accordion`)

Seletor de elementos internos:

    [name]-widget__[element]

(observe os dois underlines `__` separando a parte estrutural do elemento)

Exemplos concretos (para `device`):
- `device-widget`
- `device-widget__area`
- `device-widget__header`
- `device-widget__title`
- `device-widget__body`
- `device-widget__footer`
- `device-widget__button`

**Proibições**:
- Não usar classes fora do padrão acima.
- Não usar nomes em português.
- Não usar classes genéricas (ex: `.header`, `.card`) sem o prefixo completo.

━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━

## 4. ESTRUTURA DE ARQUIVOS (ESCRITA EM ARQUIVOS EXISTENTES)

Os diretórios e arquivos já foram previamente criados pelo usuário.

Você NÃO deve:

- Criar arquivos
- Criar pastas
- Sugerir criação de estrutura
- Alterar nomes
- Alterar caminhos

Você deve APENAS escrever o código dentro dos seguintes arquivos já existentes:

HTML:

[name]-layout/assets/html/ipseity-[name].html

CSS:

[name]-layout/assets/css/ipseity-[name].css

Se qualquer um desses arquivos não existir, interrompa a geração.

Nunca crie arquivos adicionais.
Nunca modifique arquivos fora dessa lista.

━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━

## 5. CONTEÚDO DOS ARQUIVOS HTML (regra fixa)

- O arquivo HTML é um *fragmento* contendo **apenas** 1 bloco `<section>` (sem `<html>`, `<head>`, `<body>`, `<meta>`, etc). Nada mais.  
- Estrutura mínima por bloco (exemplo, adaptar elementos conforme o layout real extraído da imagem):

    <section class="[name]-widget" aria-labelledby="[name]-title">
      <div class="[name]-widget__area">
        <header class="[name]-widget__header">
          <h2 id="[name]-title" class="[name]-widget__title">...</h2>
        </header>
        <article class="[name]-widget__body">...</article>
        <footer class="[name]-widget__footer">
          <button class="[name]-widget__button">...</button>
        </footer>
      </div>
    </section>

- Use tags semânticas adequadas conforme o conteúdo.
- Não inserir comentários.
- Não inserir scripts ou links.
- Os nomes de `id` e `aria` devem seguir o padrão em inglês e usar `[name]-title` ou equivalente sem conflitos.

━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━

## 6. CONTEÚDO DOS ARQUIVOS CSS (regra fixa)

- Declare os seletores base (seguindo a ordem de aparecimento no HTML), em seguida declare as media queries específicas, seguindo a ordem fixa de media queries.

Media queries obrigatórias e na ordem abaixo:

1. Base (sem media query) — estilos de desktop.
2. `@media (max-width: 1152px)` — ajustes iniciais (desktop → tablet).
3. `@media (max-width: 832px)` — ajustes finais (tablet → mobile).

Exemplo de estrutura do arquivo (sem comentários — em produção, escreva sem comentários):

    .device-widget { display: flex; ... }
    .device-widget__area { display: flex; flex-direction: column; ... }
    .device-widget__header { display: flex; ... }
    .device-widget__title { ... }

    @media (max-width: 1152px) {
      .device-widget { ... }
      .device-widget__area { ... }
    }

    @media (max-width: 832px) {
      .device-widget { ... }
      .device-widget__area { ... }
    }

Pontos críticos:
- Em todos os seletores estruturais, `display: flex` deve ser usado (ou aplicado a um contêiner que organiza os filhos).
- Ajustes de tipografia e espaçamento devem diminuir progressivamente nas media queries.
- Evite regras que afetem elementos fora do escopo das classes do widget.
- Não use `!important`.
- Não declare variáveis globais de cor; a cor do layout deve ser local ao widget (extraída da imagem ou descrita).

━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━

## 8. CORES

- A cor base do layout deve ser extraída da imagem sempre que houver imagem.
- Se a cor for fornecida na descrição pelo usuario, use a cor fornecida.
- Não criar variáveis ou temas globais.

━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━

## 9. O QUE NÃO GERAR (proibições)

- Não gerar `<html>`, `<head>`, `<meta>`, `<link>`, `<body>` em arquivos HTML.
- Não gerar comentários em HTML/CSS.
- Não gerar arquivos extras (README, JSON, config).
- Não gerar scripts nem dependências externas.
- Não alterar arquivos fora das pastas especificadas.
- Não usar seletores que possam colidir com outros widgets (sempre usar o prefixo completo).

━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━

## 10. CHECKLIST OBRIGATÓRIO (executar antes de finalizar)

Para cada layout gerado, verifique todos os itens abaixo:

- [ ] Nomes dos arquivos corretos e nos caminhos exatos.
- [ ] O arquivo HTML contém somente 1 `<section>` e nada mais.
- [ ] Todas as classes seguem o padrão `[name]-widget__[element]`.
- [ ] Não há comentários nos arquivos gerados.
- [ ] Não há uso de `grid`, `float`, `table`, `inline-block` para layout (apenas `display: flex`).
- [ ] Cada arquivo CSS segue a ordem: (base + @media 1152 + @media 832).
- [ ] As media queries existem e estão na ordem correta.
- [ ] Não há `!important`.
- [ ] Nenhum seletor afeta elementos externos.
- [ ] A cor base foi aplicada localmente conforme imagem/descrição.
- [ ] Tudo está em inglês nas classes/ids.
- [ ] Código limpo, indentado e pronto para uso.

Se algum item falhar, corrija antes de entregar.

━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━

## 11. MODO DE ENTREGA (formato de saída que o agente deve seguir)

Quando solicitado via prompt (modelo de geração), o agente deve apenas retornar blocos contendo:

Para cada arquivo, na ordem:
1. Caminho completo do arquivo (linha única).
2. Um bloco de código com o conteúdo do arquivo.

Exemplo (formato exato que o agente deve seguir na saída textual):

    [nome]-layout/assets/html/ipseity-[nome].html
    <conteúdo do arquivo em bloco de código>

    [nome]-layout/assets/css/ipseity-[nome].css
    <conteúdo do arquivo em bloco de código>

- Não incluir explicação entre os arquivos.
- Não incluir texto adicional fora dos blocos de arquivo.

━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━

## 12. EXEMPLO MÍNIMO (sem comentários — EM PRODUÇÃO, gere sem comentários)

Arquivo HTML:

    device-layout/assets/html/ipseity-device.html

    <section class="device-widget" aria-labelledby="device-title">
      <div class="device-widget__area">
        <header class="device-widget__header">
          <h2 id="device-title" class="device-widget__title">Title</h2>
        </header>
        <article class="device-widget__body">...</article>
        <footer class="device-widget__footer">
          <button class="device-widget__button">Action</button>
        </footer>
      </div>
    </section>

Arquivo CSS:

    device-layout/assets/css/ipseity-device.css

    .device-widget { display: flex; flex-direction: column; gap: 16px; }
    .device-widget__area { display: flex; flex-direction: column; gap: 12px; }
    .device-widget__header { display: flex; align-items: center; }
    .device-widget__title { font-size: 16px; }

    @media (max-width: 1152px) {
      .device-widget { gap: 12px; }
      .device-widget__title { font-size: 15px; }
    }

    @media (max-width: 832px) {
      .device-widget { gap: 8px; }
      .device-widget__title { font-size: 14px; }
    }

━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━

## 13. SEGURANÇA E PERMISSÕES (quando MCP/Antigravity escreve em disco)

- Se o agente tiver permissão para escrever os arquivos diretamente, escreva exatamente nos caminhos especificados.
- Se este ambiente exigir confirmação, gerar apenas os blocos de código com os caminhos (como definido em "Modo de Entrega") e aguardar a ação do usuário.
- Nunca sobrescrever arquivos fora do diretório `[name]-layout`.

━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━

## 14. ERROS E CORREÇÕES

- Se a imagem estiver muito ambígua, o agente deve aplicar boas práticas semânticas e seguir as regras da Skill.
- Se algo não puder ser resolvido automaticamente (ex: falta de cor na imagem), use a cor preta/escura neutra por padrão e marque no log interno (não exibido na saída) para revisão.
- Não exibir logs ou notas na saída final.

━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━

## 15. CONCLUSÃO

Esta Skill define, de forma absoluta, como gerar os arquivos dos layouts da biblioteca `ipseity-athenaeum-sys`.  
Siga-a estritamente. Execute o checklist. Entregue apenas os arquivos solicitados no formato especificado.

━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━