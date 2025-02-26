# GitHubで行う2人開発マニュアル

このマニュアルでは、2人で効率的にGitHubを使ってコード開発を進める方法を説明します。

## 目次

1. [初期セットアップ](#初期セットアップ)
2. [基本的な開発フロー](#基本的な開発フロー)
3. [ブランチ戦略](#ブランチ戦略)
4. [コンフリクト解決](#コンフリクト解決)
5. [コードレビュー](#コードレビュー)
6. [よくある問題と解決方法](#よくある問題と解決方法)

## 初期セットアップ

### リポジトリへのアクセス権の付与

1. リポジトリの所有者は、コラボレーターを追加する:
   - リポジトリページ → Settings → Collaborators
   - 「Add people」をクリック
   - ユーザー名またはメールアドレスを入力して招待

2. 招待されたメンバーは、GitHubから届いたメールの招待リンクをクリック

### リポジトリのクローン

```bash
# HTTPSでクローン
git clone https://github.com/nabe0326/piano_classroom.git

# または、SSHでクローン（SSH鍵を設定済みの場合）
git clone git@github.com:nabe0326/piano_classroom.git

# クローンしたディレクトリに移動
cd piano_classroom
```

### Git設定

初めて使う場合は、以下を設定してください：

```bash
# ユーザー名とメールアドレスを設定
git config --global user.name "あなたの名前"
git config --global user.email "あなたのメールアドレス"

# 改行コードの自動変換を無効化（推奨）
git config --global core.autocrlf false
```

## 基本的な開発フロー

### 1. 最新の変更を取得

```bash
# リモートの変更を取得
git pull origin main
```

### 2. 新しい機能用のブランチを作成

```bash
# 新しいブランチを作成して切り替え
git checkout -b feature/機能名
```

### 3. 変更を加える

コードを編集します。

### 4. 変更をコミット

```bash
# 変更を確認
git status

# 変更をステージング
git add .

# コミット
git commit -m "わかりやすいコミットメッセージ"
```

### 5. 変更をプッシュ

```bash
# リモートにプッシュ
git push origin feature/機能名
```

### 6. プルリクエストを作成

1. GitHubリポジトリページに行く
2. 「Compare & pull request」ボタンをクリック
3. タイトルと説明を入力
4. 「Create pull request」をクリック

### 7. レビューとマージ

1. コードレビューを行う
2. 問題がなければ「Merge pull request」をクリック

## ブランチ戦略

シンプルなブランチ戦略を使用します：

- **main**: 常に動作する安定版のコード
- **feature/xxx**: 新機能の開発用
- **bugfix/xxx**: バグ修正用
- **hotfix/xxx**: 緊急の修正用

## コンフリクト解決

コンフリクトが発生した場合：

```bash
# 最新のmainブランチを取得
git checkout main
git pull origin main

# 作業ブランチに戻ってmainをマージ
git checkout feature/機能名
git merge main

# コンフリクトが発生した場合は、ファイルを編集して解決
# コンフリクトを解決したらコミット
git add .
git commit -m "コンフリクトを解決"

# リモートにプッシュ
git push origin feature/機能名
```

## コードレビュー

プルリクエストを通じてコードレビューを行います：

1. 変更内容を確認
2. コメントを追加
3. 必要に応じて修正を依頼
4. 問題がなければ承認

## よくある問題と解決方法

### 認証エラー

```
remote: Support for password authentication was removed on August 13, 2021.
```

解決策：個人アクセストークンを使用する

1. GitHubでPersonal Access Tokenを作成
   - Settings → Developer settings → Personal access tokens → Tokens (classic)
   - Generate new tokenをクリック
   - repoスコープにチェックを入れる
2. 認証時にパスワードの代わりにトークンを使用

### 変更が競合している

```
error: failed to push some refs to 'https://github.com/...'
```

解決策：

```bash
git pull origin main
# コンフリクトを解決
git push origin feature/機能名
```

### コミットを取り消したい

```bash
# 直前のコミットを取り消し（変更は残す）
git reset --soft HEAD^

# 直前のコミットを完全に取り消し（変更も消える）
git reset --hard HEAD^
```

---

このマニュアルに従って開発を進めることで、効率的に共同作業を行うことができます。わからないことがあれば、お互いに相談しながら進めましょう。