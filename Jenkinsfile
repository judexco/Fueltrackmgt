pipeline {
  agent any

  environment {
    GITHUB_REPO_URL = 'https://github.com/judexco/Fueltrackmgt.git'
    DOCKER_IMAGE_NAME = 'jerryjude/fueltracksystem'
    DOCKER_HUB_REPO = 'jerryjude/fueltracksystem'
  }

  stages {
    stage('Clone Repository') {
      steps {
        git branch: 'master', url: "${env.GITHUB_REPO_URL}"
      }
    }

    stage('Build and Push Docker Image') {
      steps {
        script {
          def dockerImage = docker.build("${env.DOCKER_HUB_REPO}/${env.DOCKER_IMAGE_NAME}:${env.BUILD_NUMBER}", 'jerryjude/fueltracksystem')

          docker.withRegistry('https://registry.hub.docker.com/', 'docker-cred') {
          dockerImage.push("${env.BUILD_NUMBER}")
              
          }
        }
      }
    }
  }
}
