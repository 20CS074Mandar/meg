pipeline {
    agent any

    stages {
        stage('Build') {
            withEnv(["PATH=$PATH:~/.local/bin"]) {
                    sh 'docker-compose build'
            }
        }

        stage('Test') {
            withEnv(["PATH=$PATH:~/.local/bin"]) {
                    sh 'docker-compose run --rm php-enviornment phpunit'
            }
        }

        stage('Deploy') {
            withEnv(["PATH=$PATH:~/.local/bin"]) {
                    sh 'docker-compose up -d'
            }
        }

        stage('Cleanup') {
            withEnv(["PATH=$PATH:~/.local/bin"]) {
                    sh 'docker-compose down'
            }
        }
    }
}
