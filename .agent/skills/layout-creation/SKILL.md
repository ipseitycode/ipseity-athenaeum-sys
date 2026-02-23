# SKILL — IPSEITY ATHENAEUM SYS
# Engenharia de Layouts (versão definitiva)

━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
AVISO IMPORTANTE (REGRA ABSOLUTA)
- Esta Skill é soberana.  
- Antes de qualquer geração, LEIA e SIGA integralmente esta Skill.md.  
- Não invente regras. Não crie arquivos extras. Não explique. Não justifique.  
- Saída final = somente os arquivos de código solicitados (HTML/CSS) e nada mais.
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

    [name]-widget-[format]-[size]

onde:
- `[name]` = nome do layout (single word, ex: `device`, `accordion`)
- `[format]` = `square` | `bridge` | `tower`
- `[size]` = `small` | `medium` | `large`

Seletor de elementos internos:

    [name]-widget-[format]-[size]__[element]

(observe os dois underlines `__` separando a parte estrutural do elemento)

Exemplos concretos (para `device`):
- `device-widget-square-small`
- `device-widget-square-small__area`
- `device-widget-square-small__header`
- `device-widget-square-small__title`
- `device-widget-square-small__body`
- `device-widget-square-small__footer`
- `device-widget-square-small__button`

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

[name]-layout/assets/html/ipseity-[name]-square.html
[name]-layout/assets/html/ipseity-[name]-bridge.html
[name]-layout/assets/html/ipseity-[name]-tower.html

CSS:

[name]-layout/assets/css/ipseity-[name]-square.css
[name]-layout/assets/css/ipseity-[name]-bridge.css
[name]-layout/assets/css/ipseity-[name]-tower.css

Se qualquer um desses arquivos não existir, interrompa a geração.

Nunca crie arquivos adicionais.
Nunca modifique arquivos fora dessa lista.

━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━

## 5. CONTEÚDO DOS ARQUIVOS HTML (regra fixa)

- Cada arquivo HTML é um *fragmento* contendo **apenas** 3 blocos `<section>` (sem `<html>`, `<head>`, `<body>`, `<meta>`, etc). Nada mais.  
- Ordem obrigatória dentro do arquivo: **small**, **medium**, **large** (nesta sequência).  
- Estrutura mínima por bloco (exemplo, adaptar elementos conforme o layout real extraído da imagem):

    <section class="[name]-widget-[format]-small" aria-labelledby="[name]-title">
      <div class="[name]-widget-[format]-small__area">
        <header class="[name]-widget-[format]-small__header">
          <h2 id="[name]-title" class="[name]-widget-[format]-small__title">...</h2>
        </header>
        <article class="[name]-widget-[format]-small__body">...</article>
        <footer class="[name]-widget-[format]-small__footer">
          <button class="[name]-widget-[format]-small__button">...</button>
        </footer>
      </div>
    </section>

Repetir estrutura equivalente para `-medium` e `-large` no mesmo arquivo.

- Use tags semânticas adequadas conforme o conteúdo.
- Não inserir comentários.
- Não inserir scripts ou links.
- Os nomes de `id` e `aria` devem seguir o padrão em inglês e usar `[name]-title` ou equivalente sem conflitos.

━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━

## 6. CONTEÚDO DOS ARQUIVOS CSS (regra fixa)

Cada arquivo CSS corresponde a um formato (`square` / `bridge` / `tower`).

- Ordem obrigatória no arquivo: `small` → `medium` → `large` (exatamente nesta ordem).
- Para cada tamanho, primeiro declare os seletores base naquele tamanho (seguindo a ordem de aparecimento no HTML), em seguida declarar as media queries específicas para aquele tamanho, seguindo a ordem fixa de media queries.

Media queries obrigatórias e na ordem abaixo para CADA bloco (small/medium/large):

1. Base (sem media query) — estilos de desktop.
2. `@media (max-width: 1152px)` — ajustes iniciais (desktop → tablet).
3. `@media (max-width: 832px)` — ajustes finais (tablet → mobile).

Exemplo de estrutura do arquivo (sem comentários — em produção, escreva sem comentários):

    .device-widget-square-small { display: flex; ... }
    .device-widget-square-small__area { display: flex; flex-direction: column; ... }
    .device-widget-square-small__header { display: flex; ... }
    .device-widget-square-small__title { ... }

    @media (max-width: 1152px) {
      .device-widget-square-small { ... }
      .device-widget-square-small__area { ... }
    }

    @media (max-width: 832px) {
      .device-widget-square-small { ... }
      .device-widget-square-small__area { ... }
    }

    .device-widget-square-medium { display: flex; ... }
    .device-widget-square-medium__area { ... }

    @media (max-width: 1152px) { ... }
    @media (max-width: 832px) { ... }

    .device-widget-square-large { display: flex; ... }
    .device-widget-square-large__area { ... }

    @media (max-width: 1152px) { ... }
    @media (max-width: 832px) { ... }

Pontos críticos:
- Em todos os seletores estruturais, `display: flex` deve ser usado (ou aplicado a um contêiner que organiza os filhos).
- Ajustes de tipografia e espaçamento devem diminuir progressivamente nas media queries.
- Evite regras que afetem elementos fora do escopo das classes do widget.
- Não use `!important`.
- Não declare variáveis globais de cor; a cor do layout deve ser local ao widget (extraída da imagem ou descrita).

━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━

## 7. FORMATO / TAMANHOS (semântica de comportamento)

- **square**: compact, proporcional, pensado para grids; estrutura equilibrada.
- **bridge**: distribuição horizontal, blocos laterais possíveis; ideal para largura expansiva.
- **tower**: empilhamento vertical, focado em leitura sequencial.

`small` / `medium` / `large` são variações visuais do mesmo formato (modificam gap, padding, font-size, dimensões).

A geração deve adaptar a estrutura visual da imagem mantendo a coerência com estas descrições.

━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━

## 8. CORES

- A cor base do layout deve ser extraída da imagem sempre que houver imagem.
- Se a cor for fornecida na descrição pelo usuario, use a cor fornecida.
- As cores aplicadas devem ficar restritas às classes do widget (por exemplo, `.device-widget-square-small__title { color: #... }`).
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
- [ ] Cada arquivo HTML contém somente 3 `<section>` (small → medium → large) e nada mais.
- [ ] Todas as classes seguem o padrão `[name]-widget-[format]-[size]__[element]`.
- [ ] Não há comentários nos arquivos gerados.
- [ ] Não há uso de `grid`, `float`, `table`, `inline-block` para layout (apenas `display: flex`).
- [ ] Cada arquivo CSS segue a ordem: small (base + @media 1152 + @media 832), medium (base + media), large (base + media).
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

    [nome]-layout/assets/html/ipseity-[nome]-square.html
    <conteúdo do arquivo em bloco de código>

    [nome]-layout/assets/css/ipseity-[nome]-square.css
    <conteúdo do arquivo em bloco de código>

    [nome]-layout/assets/html/ipseity-[nome]-bridge.html
    <conteúdo do arquivo em bloco de código>

    [nome]-layout/assets/css/ipseity-[nome]-bridge.css
    <conteúdo do arquivo em bloco de código>

    [nome]-layout/assets/html/ipseity-[nome]-tower.html
    <conteúdo do arquivo em bloco de código>

    [nome]-layout/assets/css/ipseity-[nome]-tower.css
    <conteúdo do arquivo em bloco de código>

- Não incluir explicação entre os arquivos.
- Não incluir texto adicional fora dos blocos de arquivo.
- A ordem dos arquivos na saída pode seguir o padrão acima ou ser agrupada por formato — desde que todos os arquivos existam e cada arquivo seja precedido por seu caminho completo.

━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━

## 12. EXEMPLO MÍNIMO (sem comentários — EM PRODUÇÃO, gere sem comentários)

Arquivo HTML:

    device-layout/assets/html/ipseity-device-square.html

    <section class="device-widget-square-small" aria-labelledby="device-title-small">
      <div class="device-widget-square-small__area">
        <header class="device-widget-square-small__header">
          <h2 id="device-title-small" class="device-widget-square-small__title">Title</h2>
        </header>
        <article class="device-widget-square-small__body">...</article>
        <footer class="device-widget-square-small__footer">
          <button class="device-widget-square-small__button">Action</button>
        </footer>
      </div>
    </section>

    <section class="device-widget-square-medium" aria-labelledby="device-title-medium">
      <div class="device-widget-square-medium__area">
        <header class="device-widget-square-medium__header">
          <h2 id="device-title-medium" class="device-widget-square-medium__title">Title</h2>
        </header>
        <article class="device-widget-square-medium__body">...</article>
        <footer class="device-widget-square-medium__footer">
          <button class="device-widget-square-medium__button">Action</button>
        </footer>
      </div>
    </section>

    <section class="device-widget-square-large" aria-labelledby="device-title-large">
      <div class="device-widget-square-large__area">
        <header class="device-widget-square-large__header">
          <h2 id="device-title-large" class="device-widget-square-large__title">Title</h2>
        </header>
        <article class="device-widget-square-large__body">...</article>
        <footer class="device-widget-square-large__footer">
          <button class="device-widget-square-large__button">Action</button>
        </footer>
      </div>
    </section>

Arquivo CSS:

    device-layout/assets/css/ipseity-device-square.css

    .device-widget-square-small { display: flex; flex-direction: column; gap: 16px; }
    .device-widget-square-small__area { display: flex; flex-direction: column; gap: 12px; }
    .device-widget-square-small__header { display: flex; align-items: center; }
    .device-widget-square-small__title { font-size: 16px; }

    @media (max-width: 1152px) {
      .device-widget-square-small { gap: 12px; }
      .device-widget-square-small__title { font-size: 15px; }
    }

    @media (max-width: 832px) {
      .device-widget-square-small { gap: 8px; }
      .device-widget-square-small__title { font-size: 14px; }
    }

    .device-widget-square-medium { display: flex; flex-direction: column; gap: 20px; }
    .device-widget-square-medium__area { display: flex; flex-direction: column; gap: 16px; }
    .device-widget-square-medium__header { display: flex; align-items: center; }
    .device-widget-square-medium__title { font-size: 20px; }

    @media (max-width: 1152px) {
      .device-widget-square-medium { gap: 16px; }
      .device-widget-square-medium__title { font-size: 18px; }
    }

    @media (max-width: 832px) {
      .device-widget-square-medium { gap: 12px; }
      .device-widget-square-medium__title { font-size: 16px; }
    }

    .device-widget-square-large { display: flex; flex-direction: column; gap: 24px; }
    .device-widget-square-large__area { display: flex; flex-direction: column; gap: 20px; }
    .device-widget-square-large__header { display: flex; align-items: center; }
    .device-widget-square-large__title { font-size: 24px; }

    @media (max-width: 1152px) {
      .device-widget-square-large { gap: 20px; }
      .device-widget-square-large__title { font-size: 22px; }
    }

    @media (max-width: 832px) {
      .device-widget-square-large { gap: 16px; }
      .device-widget-square-large__title { font-size: 20px; }
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