pipeline {
    agent any

    stages {
        stage('Build') {
            steps {
                bat "docker-compose build"
                echo "Step 1 Build complete"
            }
        }

        stage('Test') {
            steps {
                bat 'phpunit --log-junit test-results.xml'
            }
            post {
                always {
                    junit 'test-results.xml'
                }
            }
        }
        stage('Deploy') {
            steps {
                bat "docker-compose up -d"
            }
        }

        stage('Cleanup') {
            steps {
                bat "docker-compose down"
            }
        }
    }
}