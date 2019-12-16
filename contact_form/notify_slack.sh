# ターミナルから実行するやつ
# sh (shellの略)

curl -X POST -H 'Content-type: application/json' --data '{"text":"Hello, World!"}' https://hooks.slack.com/services/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

# curl -X POST -H 'Content-type: application/json' --data '{
#     "text": 
#     '
#     [問い合わせがきました]
#     [名前]$1
#     [メールアドレス]$2
#     [コメント]$3
#     '
# }' $4
