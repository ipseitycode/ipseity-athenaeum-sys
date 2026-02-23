param (
    [string]$nome
)

# Validação
if (-not $nome) {
    Write-Host "Erro: informe o nome do layout."
    Write-Host "Uso: .\create-layout.ps1 nome-do-layout"
    exit 1
}

# Normalizar nome (sempre minúsculo)
$nome = $nome.ToLower()

# Primeira letra maiúscula apenas para classes
$Nome = $nome.Substring(0, 1).ToUpper() + $nome.Substring(1)

# Criar estrutura de pastas
New-Item -ItemType Directory -Force -Path "$nome-layout/assets/html" | Out-Null
New-Item -ItemType Directory -Force -Path "$nome-layout/assets/css" | Out-Null
New-Item -ItemType Directory -Force -Path "$nome-layout/configuration" | Out-Null
New-Item -ItemType Directory -Force -Path "$nome-layout/widget" | Out-Null

# Criar arquivos HTML e CSS vazios
New-Item -ItemType File -Force -Path "$nome-layout/assets/html/ipseity-$nome.html" | Out-Null

New-Item -ItemType File -Force -Path "$nome-layout/assets/css/ipseity-$nome.css" | Out-Null

# Copiar e substituir Configuration
(Get-Content "home/model/example-layout/configuration/IpseityAthenaeumExampleConfiguration.php") `
    -replace "Example", $Nome `
    -replace "example", $nome |
Set-Content "$nome-layout/configuration/IpseityAthenaeum${Nome}Configuration.php"

# Copiar e substituir Widget
(Get-Content "home/model/example-layout/widget/IpseityAthenaeumExampleWidget.php") `
    -replace "Example", $Nome `
    -replace "example", $nome |
Set-Content "$nome-layout/widget/IpseityAthenaeum${Nome}Widget.php"

# Copiar e substituir index.php
(Get-Content "home/model/example-layout/index.php") `
    -replace "Example", $Nome `
    -replace "example", $nome |
Set-Content "$nome-layout/index.php"

Write-Host "Sucesso: Layout '$nome' criado com sucesso."
