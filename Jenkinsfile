pipeline {
    agent any

    stages {
        stage('Clone repository') {
            steps {
                /* Cloning the Repository to our Workspace */
                checkout scm
            }
        }

        stage('Build image') {
            steps {
                /* This builds the actual image */
                script {
                    
                    docker.build("jerryjude/fueltracksystem")
                }
            }
        }

        stage('Push image') {
            steps {
                script {
                    /*
                        You would need to first register with DockerHub before you can push images to your account
                    */
                    docker.withRegistry('https://registry.hub.docker.com', 'dockerhub-id') {
                        def app = docker.image("jerryjude/fueltracksystem")

                        app.push("${env.BUILD_NUMBER}")
                        app.push("latest")
                    }
                }
            }
        }

        // stage('delete docker images'){
        //     steps{
        //         script{


        //             sh "docker rmi"
        //         }
        //     }
        // }

        stage('Trigger ManifestUpdate') {
            // environment {
            //     KUBECONFIG = "/path/to/your/kubeconfig"
            //     PATH = "${PATH}:/usr/local/bin"
            // }

            steps {
                script {

                       echo "triggering updatemanifest-fueltrack-k8s-job"
                       build job: 'updatemanifest', parameters: [string(name: 'DOCKERTAG', value: env.BUILD_NUMBER)]

                }
            }
        }
    }
}

