#!/usr/bin/env bash

set -e

source './venv/bin/activate'

exec env UID="$(id -u)" GID="$(id -g)" docker-compose "$@"
