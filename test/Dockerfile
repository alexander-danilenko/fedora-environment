ARG FEDORA_VERSION=latest

FROM fedora:${FEDORA_VERSION}
# Install packages. Do it before copying the code to utilize docker layer caching.
RUN dnf install -y ansible curl git-all rsync flatpak
COPY .. /app
WORKDIR /app
# Run the ansible playbook with the check and diff flags and verbosed output.
ENTRYPOINT ./install --check --diff -vv
